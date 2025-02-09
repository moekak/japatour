
// ハンバーガーメニュー
const header_btn = document.querySelector(".js_header_btn")
const menu_modal = document.querySelector(".menu_modal")
header_btn.addEventListener("click", ()=>{
    if (!menu_modal.classList.contains("menu_active")) {
        // アニメーションを開始
        menu_modal.classList.add("menu_active");
        menu_modal.classList.remove("menu_close");
        document.body.style.overflow = "hidden";
    } else {
        // アニメーションを終了
        menu_modal.classList.remove("menu_active");
        menu_modal.classList.add("menu_close");
        document.body.style.overflowY = "auto";
    }

    // ボタンの状態を切り替え
    header_btn.classList.toggle("is-active");
})
