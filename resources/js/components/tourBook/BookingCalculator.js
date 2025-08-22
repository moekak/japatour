import AdditionalServiceStrategy from "./calculator/AdditionalServiceStrategy.js";
import DiscountStrategy from "./calculator/DiscountStrategy.js";
import StandardPriceStrategy from "./calculator/StandardPriceStrategy.js";
import DataSaveObserver from "./observer/DataSaveObserver.js";
import SummaryDisplayObserver from "./observer/SummaryDisplayObserver.js";

export default class BookingCalculator{
      constructor(){
            this.baseAdultPrice = null; // 基本大人パッケージ料金
            this.baseChildPrice = null; // 基本子供パッケージ料金
            this.selectedTourOption = null //選択されたTour Itinerary
            // オブザーバーリスト
            this.observers = []
            // // DOM要素の取得
            this.initializeElements();
            // // オブザーバーの登録
            this.registerDisplayObservers();
            this.registerSaveObservers()
            this.initializeEvents();
            // // 初期計算と通知
            this.calculateAndNotify();
      }
      // DOM要素の初期化
      initializeElements() {
            // フォーム要素
            this.elements = {
                  // ツアー選択
                  tourOption: document.querySelectorAll('.js_tour_option'),
                  // 旅行者数
                  adultNumber: document.getElementById('adults-count'),
                  childNumber: document.getElementById('children-count'),

                  // 旅行者変更ボタン
                  incrementAdultBtn : document.getElementById("js_increment-adult"),
                  decrementAdultBtn : document.getElementById("js_decrement-adult"),
                  
                  incrementChildBtn : document.getElementById("js_increment-child"),
                  decrementChildBtn : document.getElementById("js_decrement-child"),
                  
                  // 日付関連
                  dateInput: document.getElementById('date-input'),
            };
      }



      // 表示オブザーバーの登録
      registerDisplayObservers() {
            // サマリー表示のオブザーバーを登録
            this.registerObserver(new SummaryDisplayObserver({
                  total: document.getElementById('grand-total'),
                  adultNumber: document.getElementById('summary-adults'),
                  childNumber: document.getElementById('summary-children'),
                  adultPrice: document.getElementById('adult-total'),
                  childPrice: document.getElementById('children-total'),
                  summaryContent: document.getElementById("summary-content"),
                  priceBrakdown: document.getElementById("price-breakdown"),
                  itineraryTitle: document.getElementById("js_itinerary_title"),
                  date: document.getElementById("js_tour-date")
            }));
      }

      // 保存オブザーバーの登録
      registerSaveObservers(){
            this.registerObserver(new DataSaveObserver({
                  itineraryId: document.getElementById("js_itinerary_id"),
                  adultNumber: document.getElementById("js_adult_number"),
                  adultPrice: document.getElementById("js_adult_price"),
                  childNumber: document.getElementById("js_child_number"),
                  childPrice: document.getElementById("js_child_price"),
                  totalPrice: document.getElementById("js_total_price"),
                  date: document.getElementById("js_date"),
            }))
      }

      // オブザーバー登録メソッド
      registerObserver(observer) {
            this.observers.push(observer);
      }

      // オブザーバーへの通知メソッド
      notifyObservers(TourData) {
            this.observers.forEach(observer => {
                  observer.update(TourData);
            });
      }

      // イベントリスナーの初期化
      initializeEvents() {
            // ツアー選択
            if (this.elements.tourOption) {
                  this.elements.tourOption.forEach(option => {
                        option.addEventListener('click', (e) => {
                              const selectedOption = e.currentTarget
                              this.selectedTourOption = selectedOption
                              this.baseAdultPrice = option.dataset.adultPrice; // 基本大人パッケージ料金
                              this.baseChildPrice = option.dataset.childPrice; 

                              // スタイル変更
                              this.elements.tourOption.forEach(opt=>{
                                    opt.classList.remove('border-[#e92929]', 'bg-red-50');
                                    opt.classList.add('border-[#e7d0d0]');
                              })

                              // スタイル変更
                              selectedOption.classList.remove('border-[#e7d0d0]');
                              selectedOption.classList.add('border-[#e92929]', 'bg-red-50');
                              this.calculateAndNotify();
                        });
                  });
            }

            // 大人人数増加
            if(this.elements.incrementAdultBtn){
                  this.elements.incrementAdultBtn.addEventListener("click", ()=>{
                        this.elements.adultNumber.innerHTML = parseInt(this.elements.adultNumber.innerHTML) + 1
                        this.calculateAndNotify();
                  })
            }

            // 大人人数減少
            if(this.elements.decrementAdultBtn){
                  this.elements.decrementAdultBtn.addEventListener("click", ()=>{
                        this.elements.adultNumber.innerHTML = parseInt(this.elements.adultNumber.innerHTML) - 1
                        this.calculateAndNotify();
                  })
            }
            
            // 子供人数増加
            if(this.elements.incrementChildBtn){
                  this.elements.incrementChildBtn.addEventListener("click", ()=>{
                        this.elements.childNumber.innerHTML = parseInt(this.elements.childNumber.innerHTML) + 1
                        this.calculateAndNotify();
                  })
            }

            // 子供人数減少
            if(this.elements.decrementChildBtn){
                  this.elements.decrementChildBtn.addEventListener("click", ()=>{
                        this.elements.childNumber.innerHTML = parseInt(this.elements.childNumber.innerHTML) - 1
                        this.calculateAndNotify();
                  })
            }
            
            // 大人旅行者数変更イベント
            if (this.elements.adultNumber) {
                  this.elements.adultNumber.addEventListener('change', () => {
                        console.log("大人料金変更");
                        
                        this.calculateAndNotify();
                  });
            }

            // 子供旅行者数変更イベント
            if (this.elements.childNumber) {
                  this.elements.childNumber.addEventListener('change', () => {
                        this.calculateAndNotify();
                  });
            }
            

            // 日付選択イベント
            if (this.elements.dateInput) {
                  this.elements.dateInput.addEventListener('change', (e) => {
                        console.log("日付"+ e.target.value);
                        
                        this.calculateAndNotify();
                  });
            }
      }


      // カンマを取り除いて数値に変換する関数
      parseNumericValue(value) {
            if (typeof value === 'string') {
                  return Number(value.replace(/,/g, ''));
            }
            return Number(value) || 0;
      }
      
      // 計算して通知するメソッド
      calculateAndNotify() {

            const adultNumber = parseInt(this.elements.adultNumber?.innerHTML) //大人の人数
            const childNumber = parseInt(this.elements.childNumber?.innerHTML) //子供の人数
            const itineraryTitle = this.selectedTourOption?.querySelector(".itinerary-title").innerHTML || "" //itineraryのタイトル
            const itineraryId= this.selectedTourOption?.querySelector(".itinerary-title").dataset.id || "" //itineraryのID

            const selectedDate = this.elements.dateInput?.value || '';
            
            // 計算オプション
            const options = {
                  adultNumber,
                  childNumber
            };

            // 戦略パターンを使って計算
            const adultPriceTotal = StandardPriceStrategy.calculateAdultPrice(this.baseAdultPrice, options);
            const childPriceTotal = StandardPriceStrategy.calculateChildPrice(this.baseChildPrice, options);
            const total = adultPriceTotal + childPriceTotal
            // const serviceTotal = AdditionalServiceStrategy.calculate(0, options);
            // const grandTotal = packageTotal + serviceTotal;
            // const discount = DiscountStrategy.calculate(basePrice, options)
            
            // 結果をオブザーバーに通知
            this.notifyObservers({
                  total,
                  adultNumber,
                  childNumber,
                  adultPriceTotal,
                  childPriceTotal,
                  selectedDate,
                  itineraryTitle,
                  itineraryId
            });
      }
}