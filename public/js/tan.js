let btn_down_filter = document.querySelectorAll(
    "#main .filter-container .location-filter .dropdown-btn > p"
);

btn_down_filter.forEach((item) => {
    item.onclick = () => {
        const ulElement = item.parentElement.querySelector("ul");

        // Lấy giá trị 'display' hiện tại bằng cách sử dụng getComputedStyle
        const currentDisplay = getComputedStyle(ulElement).display;

        // Kiểm tra và thay đổi display dựa trên giá trị hiện tại
        if (currentDisplay === "flex") {
            ulElement.style.display = "none";
        } else {
            ulElement.style.display = "flex";
        }
    };
});