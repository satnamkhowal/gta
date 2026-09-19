<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            --color: rgba(30, 30, 30);
            --bgColor: rgba(245, 245, 245);
            min-height: 100vh;
            display: grid;
            align-content: center;
            gap: 2rem;
            padding: 2rem;
            font-family: "Poppins", sans-serif;
            color: var(--color);
            background: var(--bgColor);
        }

        h1 {
            text-align: center;
        }

        .time {
            --col-gap: 2rem;
            --row-gap: 2rem;
            --line-w: 0.25rem;
            display: grid;
            grid-template-columns: var(--line-w) 1fr;
            grid-auto-columns: max-content;
            column-gap: var(--col-gap);
            list-style: none;
            width: min(60rem, 90%);
            margin-inline: auto;
        }

        /* line */
        .time::before {
            content: "";
            grid-column: 1;
            grid-row: 1 / span 20;
            background: rgb(225, 225, 225);
            border-radius: calc(var(--line-w) / 2);
        }

        /* columns*/

        /* row gaps */
        .time li:not(:last-child) {
            margin-bottom: var(--row-gap);
        }

        /* card */
        .time li {
            grid-column: 2;
            --inlineP: 1.5rem;
            margin-inline: var(--inlineP);
            grid-row: span 2;
            display: grid;
            grid-template-rows: min-content min-content min-content;
        }

        /* date */
        .time li .date {
            --dateH: 3rem;
            height: var(--dateH);
            margin-inline: calc(var(--inlineP) * -1);

            text-align: center;
            background-color: var(--accent-color);

            color: white;
            font-size: 1.25rem;
            font-weight: 700;

            display: grid;
            place-content: center;
            position: relative;

            border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
        }

        /* date flap */
        .time li .date::before {
            content: "";
            width: var(--inlineP);
            aspect-ratio: 1;
            background: var(--accent-color);
            background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
            position: absolute;
            top: 100%;

            clip-path: polygon(0 0, 100% 0, 0 100%);
            right: 0;
        }

        /* circle */
        .time li .date::after {
            content: "";
            position: absolute;
            width: 2rem;
            aspect-ratio: 1;
            background: var(--bgColor);
            border: 0.3rem solid var(--accent-color);
            border-radius: 50%;
            top: 50%;

            transform: translate(50%, -50%);
            right: calc(100% + var(--col-gap) + var(--line-w) / 2);
        }

        /* title descr */
        .time li .title,
        .time li .descr {
            background: var(--bgColor);
            position: relative;
            padding-inline: 1.5rem;
        }

        .time li .title {
            overflow: hidden;
            padding-block-start: 1.5rem;
            padding-block-end: 1rem;
            font-weight: 500;
        }

        .time li .descr {
            padding-block-end: 1.5rem;
            font-weight: 300;
        }

        /* shadows */
        .time li .title::before,
        .time li .descr::before {
            content: "";
            position: absolute;
            width: 90%;
            height: 0.5rem;
            background: rgba(0, 0, 0, 0.5);
            left: 50%;
            border-radius: 50%;
            filter: blur(4px);
            transform: translate(-50%, 50%);
        }

        .time li .title::before {
            bottom: calc(100% + 0.125rem);
        }

        .time li .descr::before {
            z-index: -1;
            bottom: 0.25rem;
        }

        @media (min-width: 40rem) {
            .time {
                grid-template-columns: 1fr var(--line-w) 1fr;
            }

            .time::before {
                grid-column: 2;
            }

            .time li:nth-child(odd) {
                grid-column: 1;
            }

            .time li:nth-child(even) {
                grid-column: 3;
            }

            /* start second card */
            .time li:nth-child(2) {
                grid-row: 2/4;
            }

            .time li:nth-child(odd) .date::before {
                clip-path: polygon(0 0, 100% 0, 100% 100%);
                left: 0;
            }

            .time li:nth-child(odd) .date::after {
                transform: translate(-50%, -50%);
                left: calc(100% + var(--col-gap) + var(--line-w) / 2);
            }

            .time li:nth-child(odd) .date {
                border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
            }
        }

        .credits {
            margin-top: 1rem;
            text-align: right;
        }

        .credits a {
            color: var(--color);
        }
    </style>
</head>

<body>

    <ul class="time">
        <li style="--accent-color:#41516C">
            <div class="date">2014</div>
            <div class="title">Inception of Groot Academy</div>
            <div class="descr">Groot Academy was founded with the vision of providing high-quality IT training to aspiring software engineers. The academy began with a small team of experts and a mission to bridge the gap between theoretical knowledge and practical skills.</div>
        </li>
        <li style="--accent-color:#FBCA3E">
            <div class="date">2015</div>
            <div class="title">First Batch Graduates</div>
            <div class="descr">The academy successfully graduated its first batch of students, many of whom secured positions in well-established IT companies. This milestone marked the beginning of Groot Academy’s reputation for producing industry-ready professionals.</div>
        </li>
        <li style="--accent-color:#E24A68">
            <div class="date">2016</div>
            <div class="title">Expanding Course Offerings</div>
            <div class="descr">Groot Academy expanded its curriculum to include courses in Full Stack Development, covering technologies like JavaScript, Node.js, React, and database management, meeting the growing demand for web developers.</div>
        </li>
        <li style="--accent-color:#1B5F8C">
            <div class="date">2017</div>
            <div class="title">Collaboration with Groot Software</div>
            <div class="descr">A strategic partnership with Groot Software was formed, allowing students to gain real-world experience through internships and live projects. This collaboration strengthened Groot Academy’s hands-on learning approach.</div>
        </li>
        <li style="--accent-color:#4CADAD">
            <div class="date">2018</div>
            <div class="title">Introduction of Cloud Computing and DevOps Courses</div>
            <div class="descr">Groot Academy introduced new courses in Cloud Computing (AWS, Azure, GCP) and DevOps, preparing students for the rapidly evolving IT landscape and the need for scalable, cloud-based solutions.</div>
        </li>
        <li style="--accent-color:#41516C">
            <div class="date">2019</div>
            <div class="title">Launch of Groot Academy's Online Training Platform</div>
            <div class="descr">To reach a wider audience, Groot Academy launched an online platform offering flexible, remote learning options. This enabled working professionals and students from various cities to access high-quality IT education from anywhere.</div>
        </li>
        <li style="--accent-color:#FBCA3E">
            <div class="date">2020</div>
            <div class="title">Adapting to the Pandemic</div>
            <div class="descr">In response to the global COVID-19 pandemic, Groot Academy swiftly transitioned to fully online classes, ensuring uninterrupted learning for students while enhancing virtual collaboration and mentoring.</div>
        </li>
        <li style="--accent-color:#E24A68">
            <div class="date">2021</div>
            <div class="title">Achieving Industry Recognition</div>
            <div class="descr">Groot Academy received industry recognition for its comprehensive curriculum and successful student placements. The academy began attracting partnerships with top-tier tech companies for placements and collaborations.</div>
        </li>
        <li style="--accent-color:#1B5F8C">
            <div class="date">2022</div>
            <div class="title">Expanding to New Cities</div>
            <div class="descr">Due to its growing popularity, Groot Academy opened new branches in multiple cities, offering local training options along with its renowned online programs. The Jaipur branch became a hub for IT training in North India.</div>
        </li>
        <li style="--accent-color:#4CADAD">
            <div class="date">2023</div>
            <div class="title">Launch of Specialized Masterclasses</div>
            <div class="descr">Groot Academy introduced specialized masterclasses led by industry experts, focusing on advanced topics like AI, Machine Learning, and Blockchain, empowering students with cutting-edge knowledge.</div>
        </li>
        <li style="--accent-color:#41516C">
            <div class="date">2024</div>
            <div class="title">Celebrating a Decade of Excellence</div>
            <div class="descr">Groot Academy celebrates its 10th anniversary, having trained thousands of students who have gone on to successful careers in IT. With a solid foundation and a forward-thinking approach, the academy continues to innovate and grow in the field of IT education.</div>
        </li>
    </ul>

    <div class="credits"><a target="_blank" href="https://www.freepik.com/free-vector/infographic-template-with-yearly-info_1252895.htm">inspired by</a></div>
</body>

</html>