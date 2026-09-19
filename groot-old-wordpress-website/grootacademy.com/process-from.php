<?php
/**
 * ============================================================
 * GROOT ACADEMY - ENROLLMENT FORM PROCESSOR
 * ============================================================
 *
 * Endpoint:
 * /process-from
 *
 * PHP 7.4+ recommended
 *
 * Features:
 * - Form validation
 * - MySQL lead storage
 * - Automatic table creation
 * - Hostinger SMTP SSL on port 465
 * - Admin email notification
 * - Student auto-reply
 * - Basic anti-spam protection
 *
 * ============================================================
 */

declare(strict_types=1);

session_start();


/* ============================================================
   1. MYSQL CONFIGURATION
============================================================ */

$db_host = "localhost";
$db_name = "u950309299_leads";
$db_user = "u950309299_leads";
$db_pass = "HareRam@987#45";


/* ============================================================
   2. HOSTINGER SMTP CONFIGURATION
============================================================ */

$smtp_host = "smtp.hostinger.com";
$smtp_port = 465;

$smtp_username = "info@grootacademy.com";
$smtp_password = "HareRam@987#45";

$smtp_from_email = "info@grootacademy.com";
$smtp_from_name  = "Groot Academy";


/* ============================================================
   3. ADMIN EMAIL
============================================================ */

$admin_email = "mygrootacademy@gmail.com";


/* ============================================================
   4. WEBSITE CONFIGURATION
============================================================ */

$website_url = "https://grootacademy.com";

$success_url = "/enroll-now?status=success";

$error_url = "/enroll-now?status=error";


/* ============================================================
   5. SECURITY HEADERS
============================================================ */

header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Referrer-Policy: strict-origin-when-cross-origin");


/* ============================================================
   6. ALLOW ONLY POST REQUEST
============================================================ */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);

    exit("Invalid request method.");

}


/* ============================================================
   7. HELPER FUNCTIONS
============================================================ */

function clean_input(string $value): string
{
    return trim(strip_tags($value));
}


function redirect_to(string $url): void
{
    header("Location: " . $url);
    exit;
}


function safe_header_value(string $value): string
{
    return str_replace(
        ["\r", "\n"],
        "",
        $value
    );
}


/* ============================================================
   8. HONEYPOT SPAM PROTECTION
============================================================ */

if (!empty($_POST["website"])) {

    /*
     * Bots that fill the hidden "website" field
     * are rejected silently.
     */

    exit("Submission received.");

}


/* ============================================================
   9. GET FORM DATA
============================================================ */

$name = clean_input(
    $_POST["your-name"] ?? ""
);

$phone = clean_input(
    $_POST["your-phone"] ?? ""
);

$email = trim(
    $_POST["your-email"] ?? ""
);

$course = clean_input(
    $_POST["your-course"] ?? ""
);

$message = clean_input(
    $_POST["your-message"] ?? ""
);

$consent = $_POST["consent"] ?? "";


/* ============================================================
   10. VALIDATION
============================================================ */

$errors = [];


/*
|--------------------------------------------------------------------------
| Name
|--------------------------------------------------------------------------
*/

if ($name === "") {

    $errors[] = "Please enter your name.";

}
elseif (mb_strlen($name) < 2) {

    $errors[] = "Please enter a valid name.";

}


/*
|--------------------------------------------------------------------------
| Phone
|--------------------------------------------------------------------------
*/

$phone_digits = preg_replace(
    "/[^0-9]/",
    "",
    $phone
);

if ($phone_digits === "") {

    $errors[] = "Please enter your mobile number.";

}
elseif (!preg_match(
    "/^[0-9]{10}$/",
    $phone_digits
)) {

    $errors[] = "Please enter a valid 10-digit mobile number.";

}


/*
|--------------------------------------------------------------------------
| Email
|--------------------------------------------------------------------------
*/

if ($email === "") {

    $errors[] = "Please enter your email address.";

}
elseif (!filter_var(
    $email,
    FILTER_VALIDATE_EMAIL
)) {

    $errors[] = "Please enter a valid email address.";

}


/*
|--------------------------------------------------------------------------
| Course
|--------------------------------------------------------------------------
*/

if ($course === "") {

    $errors[] = "Please select a course.";

}


/*
|--------------------------------------------------------------------------
| Consent
|--------------------------------------------------------------------------
*/

if ($consent !== "yes") {

    $errors[] = "Please accept the contact permission.";

}


/* ============================================================
   11. HANDLE VALIDATION ERRORS
============================================================ */

if (!empty($errors)) {

    $error_message = implode(
        " ",
        $errors
    );

    redirect_to(
        $error_url .
        "&message=" .
        urlencode($error_message)
    );

}


/* ============================================================
   12. MYSQL CONNECTION
============================================================ */

try {

    $dsn =
        "mysql:host=" .
        $db_host .
        ";dbname=" .
        $db_name .
        ";charset=utf8mb4";


    $pdo = new PDO(

        $dsn,

        $db_user,

        $db_pass,

        [

            PDO::ATTR_ERRMODE =>
                PDO::ERRMODE_EXCEPTION,

            PDO::ATTR_DEFAULT_FETCH_MODE =>
                PDO::FETCH_ASSOC,

            PDO::ATTR_EMULATE_PREPARES =>
                false

        ]

    );

}
catch (PDOException $e) {

    error_log(
        "Groot Academy MySQL Connection Error: " .
        $e->getMessage()
    );

    http_response_code(500);

    exit(
        "Unable to connect to the database."
    );

}


/* ============================================================
   13. CREATE ENROLLMENT TABLE
============================================================ */

try {

    $create_table_sql = "

        CREATE TABLE IF NOT EXISTS groot_enrollments (

            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,

            full_name VARCHAR(150) NOT NULL,

            phone VARCHAR(20) NOT NULL,

            email VARCHAR(190) NOT NULL,

            course VARCHAR(200) NOT NULL,

            message TEXT NULL,

            consent TINYINT(1) NOT NULL DEFAULT 0,

            ip_address VARCHAR(45) NULL,

            user_agent TEXT NULL,

            status VARCHAR(50) NOT NULL DEFAULT 'new',

            created_at TIMESTAMP NOT NULL
                DEFAULT CURRENT_TIMESTAMP,

            PRIMARY KEY (id),

            INDEX idx_email (email),

            INDEX idx_phone (phone),

            INDEX idx_course (course),

            INDEX idx_created_at (created_at)

        )

        ENGINE=InnoDB

        DEFAULT CHARSET=utf8mb4

        COLLATE=utf8mb4_unicode_ci

    ";


    $pdo->exec(
        $create_table_sql
    );

}
catch (PDOException $e) {

    error_log(
        "Groot Academy Table Creation Error: " .
        $e->getMessage()
    );

    http_response_code(500);

    exit(
        "Unable to prepare the database."
    );

}


/* ============================================================
   14. USER INFORMATION
============================================================ */

$ip_address =
    $_SERVER["REMOTE_ADDR"] ?? "";

$user_agent =
    $_SERVER["HTTP_USER_AGENT"] ?? "";


/* ============================================================
   15. INSERT ENROLLMENT
============================================================ */

try {

    $insert_sql = "

        INSERT INTO groot_enrollments

        (
            full_name,
            phone,
            email,
            course,
            message,
            consent,
            ip_address,
            user_agent,
            status
        )

        VALUES

        (
            :full_name,
            :phone,
            :email,
            :course,
            :message,
            :consent,
            :ip_address,
            :user_agent,
            :status
        )

    ";


    $stmt = $pdo->prepare(
        $insert_sql
    );


    $stmt->execute(

        [

            ":full_name" =>
                $name,

            ":phone" =>
                $phone_digits,

            ":email" =>
                $email,

            ":course" =>
                $course,

            ":message" =>
                $message,

            ":consent" =>
                1,

            ":ip_address" =>
                $ip_address,

            ":user_agent" =>
                $user_agent,

            ":status" =>
                "new"

        ]

    );


    $lead_id =
        (int)$pdo->lastInsertId();

}
catch (PDOException $e) {

    error_log(
        "Groot Academy Lead Insert Error: " .
        $e->getMessage()
    );

    http_response_code(500);

    exit(
        "Unable to save your enquiry."
    );

}


/* ============================================================
   16. SMTP SEND FUNCTION
============================================================ */

/**
 * Hostinger SMTP
 *
 * Port 465 uses implicit SSL.
 *
 * This is different from port 587,
 * which normally uses STARTTLS.
 */

function smtp_send_email(
    string $host,
    int $port,
    string $username,
    string $password,
    string $from_email,
    string $from_name,
    string $to_email,
    string $subject,
    string $html_body
): bool {


    $timeout = 30;


    /*
     * Port 465 = implicit SSL
     */

    $socket = fsockopen(

        "ssl://" . $host,

        $port,

        $errno,

        $errstr,

        $timeout

    );


    if (!$socket) {

        error_log(

            "SMTP connection failed: " .
            $errno .
            " - " .
            $errstr

        );

        return false;

    }


    stream_set_timeout(
        $socket,
        $timeout
    );


    /* --------------------------------------------------------
       READ SMTP RESPONSE
    -------------------------------------------------------- */

    $read_response = function () use (
        $socket
    ): string {

        $response = "";


        while ($line = fgets(
            $socket,
            515
        )) {

            $response .= $line;


            /*
             * SMTP multiline response ends
             * when character 4 is a space.
             */

            if (
                isset($line[3]) &&
                $line[3] === " "
            ) {

                break;

            }

        }


        return $response;

    };


    /* --------------------------------------------------------
       SEND SMTP COMMAND
    -------------------------------------------------------- */

    $send_command = function (

        string $command,

        array $expected_codes

    ) use (

        $socket,

        $read_response

    ): bool {


        fwrite(

            $socket,

            $command . "\r\n"

        );


        $response =
            $read_response();


        $code =
            (int)substr(
                $response,
                0,
                3
            );


        if (
            !in_array(
                $code,
                $expected_codes,
                true
            )
        ) {

            error_log(
                "SMTP Error: " .
                trim($response)
            );

            return false;

        }


        return true;

    };


    /* --------------------------------------------------------
       INITIAL SERVER RESPONSE
    -------------------------------------------------------- */

    $response =
        $read_response();


    if (
        (int)substr(
            $response,
            0,
            3
        ) !== 220
    ) {

        error_log(
            "SMTP Initial Response Error: " .
            trim($response)
        );

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       EHLO
    -------------------------------------------------------- */

    if (!$send_command(
        "EHLO localhost",
        [250]
    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       AUTH LOGIN
    -------------------------------------------------------- */

    if (!$send_command(
        "AUTH LOGIN",
        [334]
    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       SMTP USERNAME
    -------------------------------------------------------- */

    if (!$send_command(
        base64_encode($username),
        [334]
    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       SMTP PASSWORD
    -------------------------------------------------------- */

    if (!$send_command(
        base64_encode($password),
        [235]
    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       MAIL FROM
    -------------------------------------------------------- */

    if (!$send_command(

        "MAIL FROM:<" .
        $from_email .
        ">",

        [250]

    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       RECIPIENT
    -------------------------------------------------------- */

    if (!$send_command(

        "RCPT TO:<" .
        $to_email .
        ">",

        [250, 251]

    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       DATA
    -------------------------------------------------------- */

    if (!$send_command(
        "DATA",
        [354]
    )) {

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       SAFE SUBJECT
    -------------------------------------------------------- */

    $subject =
        safe_header_value(
            $subject
        );


    $from_name =
        safe_header_value(
            $from_name
        );


    /* --------------------------------------------------------
       EMAIL HEADERS
    -------------------------------------------------------- */

    $headers = "";

    $headers .=
        "From: " .
        $from_name .
        " <" .
        $from_email .
        ">\r\n";


    $headers .=
        "To: " .
        $to_email .
        "\r\n";


    $headers .=
        "Subject: " .
        $subject .
        "\r\n";


    $headers .=
        "MIME-Version: 1.0\r\n";


    $headers .=
        "Content-Type: text/html; charset=UTF-8\r\n";


    $headers .=
        "Content-Transfer-Encoding: 8bit\r\n";


    $headers .=
        "X-Mailer: Groot Academy Enrollment System\r\n";


    /* --------------------------------------------------------
       EMAIL BODY
    -------------------------------------------------------- */

    $email_content =

        $headers .

        "\r\n" .

        $html_body .

        "\r\n.";


    fwrite(

        $socket,

        $email_content .
        "\r\n"

    );


    /* --------------------------------------------------------
       DATA RESPONSE
    -------------------------------------------------------- */

    $response =
        $read_response();


    if (
        (int)substr(
            $response,
            0,
            3
        ) !== 250
    ) {

        error_log(
            "SMTP DATA Error: " .
            trim($response)
        );

        fclose($socket);

        return false;

    }


    /* --------------------------------------------------------
       QUIT
    -------------------------------------------------------- */

    fwrite(
        $socket,
        "QUIT\r\n"
    );


    fclose($socket);


    return true;

}


/* ============================================================
   17. ESCAPE VALUES FOR HTML EMAIL
============================================================ */

$email_name =
    htmlspecialchars(
        $name,
        ENT_QUOTES,
        "UTF-8"
    );


$email_phone =
    htmlspecialchars(
        $phone_digits,
        ENT_QUOTES,
        "UTF-8"
    );


$email_address =
    htmlspecialchars(
        $email,
        ENT_QUOTES,
        "UTF-8"
    );


$email_course =
    htmlspecialchars(
        $course,
        ENT_QUOTES,
        "UTF-8"
    );


$email_message =
    nl2br(
        htmlspecialchars(
            $message,
            ENT_QUOTES,
            "UTF-8"
        )
    );


$email_lead_id =
    htmlspecialchars(
        (string)$lead_id,
        ENT_QUOTES,
        "UTF-8"
    );


/* ============================================================
   18. ADMIN EMAIL
============================================================ */

$admin_subject =
    "New Groot Academy Enrollment #" .
    $lead_id .
    " - " .
    $course;


$admin_body = '

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>New Groot Academy Enrollment</title>

</head>


<body style="
    margin:0;
    padding:20px;
    background:#f4f7fb;
    font-family:Arial,Helvetica,sans-serif;
">


<div style="
    max-width:700px;
    margin:0 auto;
    background:#ffffff;
    border:1px solid #e4eaf1;
    border-radius:10px;
    overflow:hidden;
">


<!-- HEADER -->

<div style="
    background:#071b3a;
    color:#ffffff;
    padding:25px;
">

    <h2 style="
        margin:0;
        font-size:24px;
    ">
        Groot Academy
    </h2>

    <p style="
        margin:7px 0 0;
        color:#dce8f5;
    ">
        New Enrollment Enquiry
    </p>

</div>


<!-- CONTENT -->

<div style="
    padding:30px;
">


<h3 style="
    color:#071b3a;
    margin-top:0;
">

    Student Details

</h3>


<table
    width="100%"
    cellpadding="10"
    cellspacing="0"
    style="
        border-collapse:collapse;
        font-size:14px;
    "
>


<tr>

<td style="
    border-bottom:1px solid #eeeeee;
    width:35%;
">

<strong>Lead ID</strong>

</td>

<td style="
    border-bottom:1px solid #eeeeee;
">

#' . $email_lead_id . '

</td>

</tr>


<tr>

<td style="
    border-bottom:1px solid #eeeeee;
">

<strong>Name</strong>

</td>

<td style="
    border-bottom:1px solid #eeeeee;
">

' . $email_name . '

</td>

</tr>


<tr>

<td style="
    border-bottom:1px solid #eeeeee;
">

<strong>Phone</strong>

</td>

<td style="
    border-bottom:1px solid #eeeeee;
">

' . $email_phone . '

</td>

</tr>


<tr>

<td style="
    border-bottom:1px solid #eeeeee;
">

<strong>Email</strong>

</td>

<td style="
    border-bottom:1px solid #eeeeee;
">

' . $email_address . '

</td>

</tr>


<tr>

<td style="
    border-bottom:1px solid #eeeeee;
">

<strong>Course</strong>

</td>

<td style="
    border-bottom:1px solid #eeeeee;
">

<strong>' . $email_course . '</strong>

</td>

</tr>


<tr>

<td style="
    vertical-align:top;
">

<strong>Message</strong>

</td>

<td>

' . ($email_message !== "" ? $email_message : "No message provided") . '

</td>

</tr>


</table>


<div style="
    margin-top:25px;
    padding:15px;
    background:#f5f9fd;
    border-left:4px solid #08a968;
    font-size:13px;
">

This enquiry was submitted through the
Groot Academy Enroll Now page.

</div>


<p style="
    color:#777777;
    font-size:12px;
    margin-top:25px;
">

Groot Academy Enrollment System

</p>


</div>

</div>


</body>

</html>

';


/* ============================================================
   19. SEND ADMIN EMAIL
============================================================ */

$admin_mail_sent =
    smtp_send_email(

        $smtp_host,

        $smtp_port,

        $smtp_username,

        $smtp_password,

        $smtp_from_email,

        $smtp_from_name,

        $admin_email,

        $admin_subject,

        $admin_body

    );


/* ============================================================
   20. STUDENT CONFIRMATION EMAIL
============================================================ */

$student_subject =
    "Thank You for Enquiring at Groot Academy";


$student_body = '

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Groot Academy Enquiry</title>

</head>


<body style="
    margin:0;
    padding:20px;
    background:#f4f7fb;
    font-family:Arial,Helvetica,sans-serif;
">


<div style="
    max-width:650px;
    margin:0 auto;
    background:#ffffff;
    border:1px solid #e4eaf1;
    border-radius:10px;
    overflow:hidden;
">


<!-- HEADER -->

<div style="
    background:#071b3a;
    color:#ffffff;
    padding:25px;
">

    <h2 style="
        margin:0;
    ">
        Groot Academy
    </h2>

    <p style="
        margin:7px 0 0;
        color:#dce8f5;
    ">
        Your Learning Journey Starts Here
    </p>

</div>


<!-- BODY -->

<div style="
    padding:30px;
">


<h2 style="
    color:#071b3a;
">

Hi ' . $email_name . ',

</h2>


<p style="
    color:#4a5568;
    line-height:1.7;
">

Thank you for your enquiry with
<strong>Groot Academy</strong>.

</p>


<p style="
    color:#4a5568;
    line-height:1.7;
">

We have received your enrollment enquiry for:

</p>


<div style="
    background:#f0f7ff;
    border-left:4px solid #075eb5;
    padding:15px;
    margin:20px 0;
    color:#071b3a;
">

<strong>
' . $email_course . '
</strong>

</div>


<p style="
    color:#4a5568;
    line-height:1.7;
">

Our counselling team will review your enquiry
and contact you regarding course details,
learning options and the next steps.

</p>


<p style="
    color:#4a5568;
    line-height:1.7;
">

If you have any additional questions,
our team will be happy to assist you.

</p>


<a
    href="' . $website_url . '"
    style="
        display:inline-block;
        background:#08a968;
        color:#ffffff;
        padding:13px 22px;
        text-decoration:none;
        border-radius:5px;
        margin-top:10px;
    "
>

Visit Groot Academy

</a>


<p style="
    margin-top:30px;
    color:#4a5568;
">

Regards,<br>

<strong>
Groot Academy
</strong>

</p>


</div>

</div>


</body>

</html>

';


/* ============================================================
   21. SEND STUDENT EMAIL
============================================================ */

$student_mail_sent =
    smtp_send_email(

        $smtp_host,

        $smtp_port,

        $smtp_username,

        $smtp_password,

        $smtp_from_email,

        $smtp_from_name,

        $email,

        $student_subject,

        $student_body

    );


/* ============================================================
   22. UPDATE EMAIL STATUS IN DATABASE
============================================================ */

try {

    $email_status =

        "admin:" .
        (
            $admin_mail_sent
            ? "sent"
            : "failed"
        ) .

        ",student:" .

        (
            $student_mail_sent
            ? "sent"
            : "failed"
        );


    $update_stmt = $pdo->prepare("

        UPDATE groot_enrollments

        SET status = :status

        WHERE id = :id

    ");


    $update_stmt->execute(

        [

            ":status" =>
                $email_status,

            ":id" =>
                $lead_id

        ]

    );

}
catch (PDOException $e) {

    error_log(
        "Groot Academy Status Update Error: " .
        $e->getMessage()
    );

}


/* ============================================================
   23. SUCCESS REDIRECT
============================================================ */

redirect_to(
    $success_url
);

?>