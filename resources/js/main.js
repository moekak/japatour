const header = document.querySelector(".js_header");
const title = document.querySelectorAll(".js_title");

const tl = gsap.timeline();
tl.to(title, { y: 0, duration: 1 });
tl.to(header, { y: 0, duration: 1 });

gsap.registerPlugin(ScrollTrigger);
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

ScrollTrigger.create({
  start: "top 30%",
  trigger: ".js_title",
  end: () => `+=${document.documentElement.scrollHeight}`,
  toggleClass: { targets: ".js_header", className: "header-active" },
});

AOS.init();

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
  // arrows: true, //前へ・次への矢印ナビを表示
  dots: true, //ドット型のナビを表示,
  // centerMode: true,       // スライドを中央に表示
  centerPadding: '40px',  // 両端に見えるスライドの幅を調整
  slidesToShow: 3,        // 表示するスライドの数

  variableWidth: true 

  // infinite: true //無限ループ
});


const submit_btn = document.getElementById("js_submit_btn")
submit_btn.addEventListener("click", ()=>{
  document.querySelector(".bg").classList.remove("hidden")
  document.querySelector(".loader").classList.remove("hidden")
})


// reviewの文字制限

const reviews = document.querySelectorAll(".js_review")
const review_containers = document.querySelectorAll(".js_review_container")
let max_height = 0

review_containers.forEach((container)=>{
  if(container.clientHeight > max_height){
    max_height = container.clientHeight
  }

  container.style.height = `${max_height}px`
  

})

reviews.forEach((review)=>{
  let text = review.textContent.trim();
  review.textContent= text.length > 320 ? text.substring(0, 320) + "..." : text;
})