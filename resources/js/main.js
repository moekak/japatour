
AOS.init();

// 要素の取得をまとめる
const header = document.querySelector(".js_header");
const headerSP = document.querySelector(".js_header_pc");
const titles = document.querySelectorAll(".js_title");

// ScrollTriggerの登録（1回だけで良い）
gsap.registerPlugin(ScrollTrigger);

// タイムラインのアニメーションをまとめる
const tl = gsap.timeline();
tl.to(titles, { y: 0, duration: 1 })
  .to([header, headerSP], { y: 0, duration: 1 }); // 両方のヘッダーを同時にアニメーション

// パララックス効果（1回だけで良い）
gsap.utils.toArray(".js-parallax").forEach((wrap) => {
	const y = wrap.getAttribute("data-y") || -100;
	
	gsap.to(wrap, {
		y: y,
		scrollTrigger: {
		trigger: wrap,
		start: "top bottom",
		end: "bottom top",
		scrub: 0.5,
		//markers: true
		},
	});
});

// ヘッダーのクラス切り替え
ScrollTrigger.create({
	start: "top 30%",
	trigger: ".js_title",
	end: () => `+=${document.documentElement.scrollHeight}`,
	toggleClass: { 
		targets: [".js_header", ".js_header_pc"], // 両方のヘッダーを対象に
		className: "header-active" 
	},
});


// why choose japa tourのところの高さを合わせる

const mediaQuery = window.matchMedia("(min-width: 1201px)");

if (mediaQuery.matches) {
	const cards = document.querySelectorAll(".js_reason_card");
	let height = 0;
	cards.forEach((card) => {
		if (card.clientHeight > height) {
			height = card.clientHeight;
		}
	});

	cards.forEach((card) => {
		card.style.height = `${height}px`;
	});
}




$('#js-slick').slick({
	// autoplay: true, //自動再生
	autoplaySpeed: 3000, //自動再生の速度
	arrows: true, //前へ・次への矢印ナビを表示
	dots: true, //ドット型のナビを表示,
	// centerMode: true,       // スライドを中央に表示
	centerPadding: '40px',  // 両端に見えるスライドの幅を調整
	slidesToShow: 3,        // 表示するスライドの数
	responsive: [
		{
			breakpoint: 1000, // 画面幅1024px以下の場合
			settings: {
				slidesToShow: 2, // 2枚表示
				centerPadding: '30px' // 両端の幅を調整
			},
			breakpoint: 650, // 画面幅1024px以下の場合
			settings: {
				slidesToShow: 1, // 2枚表示
				centerPadding: '30px' // 両端の幅を調整
			},
		},
	]
});


const submit_btn = document.getElementById("js_submit_btn")
submit_btn.addEventListener("click", ()=>{
	document.querySelector(".bg").classList.remove("hidden")
	document.querySelector(".loader").classList.remove("hidden")
})



const reviews = document.querySelectorAll(".js_review")

const mediaQuery1200 = window.matchMedia('(max-width: 1200px)');
const mediaQuery900 = window.matchMedia('(max-width: 900px)');
const mediaQuery800 = window.matchMedia('(max-width: 800px)');
const mediaQuery650 = window.matchMedia('(max-width: 650px)');
const mediaQuery450 = window.matchMedia('(max-width: 450px)');
const mediaQuery350 = window.matchMedia('(max-width: 350px)');

let MAX_LENGTH = mediaQuery350.matches ? 170 : (mediaQuery450.matches ? 350 : (mediaQuery650.matches ? 420 : ( mediaQuery800.matches ? 230 : (mediaQuery900.matches ? 280: (mediaQuery1200.matches ? 240 : 310)))));
console.log(MAX_LENGTH);


reviews.forEach((review) => {
	let text = review.textContent.trim();
	if (text.length > MAX_LENGTH) {
		// 元のテキストを切り取る
		let truncatedText = text.substring(0, MAX_LENGTH);

		// 既存の内容を消して、新しい構造を作成
		review.innerHTML = `
			<span>${truncatedText}</span>
			<span style="cursor: pointer; padding-left:8px; color: #007BFF;" class="js_see_more">... see more</span>
		`;
	}
});


document.addEventListener("DOMContentLoaded", ()=>{

	// レビュー親要素の高さを一番高い要素に合わせる
	const containers = document.querySelectorAll(".js_review_container")
	let maxHeight = 0
	containers.forEach((container)=>{
		if(container.clientHeight > maxHeight){
			maxHeight = container.clientHeight
		}
	})

	containers.forEach((container)=>{
		container.style.height = `${maxHeight}px`
	})


	const menus = document.querySelectorAll(".js_menu")
	const menu_modal = document.querySelector(".menu_modal")
	const header_btn = document.querySelector(".js_header_btn")
	
	menus.forEach((menu)=>{
		menu.addEventListener("click", ()=>{
			menu_modal.classList.remove("menu_active");
			menu_modal.classList.add("menu_close");
			document.body.style.overflowY = "auto";
			header_btn.classList.remove("is-active");
			  // ボタンの状態を切り替え
			header_btn.classList.remove("is-active");
		})
	})



	// // 電話アイコン押したら電話をかける
	// const phone = document.getElementById("eld4n96c55y5")
	// phone.addEventListener("click", ()=>{
	// 	window.location.href = 'tel:090-6495-4567'
	// })
})
