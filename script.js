// script.js

function loadVideos() {
    var selectedCourse = document.getElementById("coursesDropdown").value;
    var videosContainer = document.getElementById("videosContainer");

    // يمكنك إضافة مقاطع الفيديو هنا بناءً على الدورة المحددة
    videosContainer.innerHTML = ""; // قم بمسح المحتوى السابق

    if (selectedCourse === "python") {
        // إضافة مقاطع الفيديو لدورة Python
        addVideo("الدرس الأول: مقدمة في Python", "python_intro.mp4");
        addVideo("الدرس الثاني: أساسيات Python", "python_basics.mp4");
        // يمكنك إضافة المزيد من مقاطع الفيديو هنا
    } else if (selectedCourse === "ui") {
        // إضافة مقاطع الفيديو لدورة تطوير واجهات المستخدم
        addVideo("الدرس الأول: مقدمة في تطوير الواجهات", "ui_intro.mp4");
        addVideo("الدرس الثاني: أساسيات تصميم الواجهات", "ui_basics.mp4");
        // يمكنك إضافة المزيد من مقاطع الفيديو هنا
    }
    // تكرار العملية لبقية الدورات
}

function addVideo(title, videoSource) {
    var videosContainer = document.getElementById("videosContainer");

    var videoCard = document.createElement("div");
    videoCard.classList.add("video-card");

    videoCard.innerHTML = `
        <h3>${title}</h3>
        <video width="100%" controls>
            <source src="${videoSource}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    `;

    videosContainer.appendChild(videoCard);
}
