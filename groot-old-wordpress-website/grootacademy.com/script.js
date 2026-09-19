// // Function to show the popup
// function showPopup() {
//     var popup = document.getElementById("popup");
//     popup.style.display = "block";
// }

// // Function to hide the popup
// function hidePopup() {
//     var popup = document.getElementById("popup");
//     popup.style.display = "none";
// }

// // Automatically show the popup when the page loads
// window.onload = function () {
//     showPopup();
// };

// // Close the popup when the close button is clicked
// document.getElementById("close").addEventListener("click", function () {
//     hidePopup();
// });

// // Handle form submission
// document.getElementById("submitBtn").addEventListener("click", function () {
//     var email = document.getElementById("email").value;
//     var mobile = document.getElementById("mobile").value;

//     // You can perform data validation here

//     // Send data to PHP script for processing
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "process", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             // Data processed successfully; hide the popup
//             hidePopup();
//         }
//     };

//     var formData = "email=" + encodeURIComponent(email) + "&mobile=" + encodeURIComponent(mobile);
//     xhr.send(formData);
// });


// Handle form submission
document.getElementById("submitBtn").addEventListener("click", function () {
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;

    // You can perform data validation here

    // Send data to PHP script for database interaction
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Data processed successfully; hide the popup
            hidePopup();
        }
    };

    var formData = "email=" + encodeURIComponent(email) + "&mobile=" + encodeURIComponent(mobile);
    xhr.send(formData);
});
