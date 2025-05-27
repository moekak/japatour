import AdditionalServiceStrategy from "./calculator/AdditionalServiceStrategy.js";
import StandardPriceStrategy from "./calculator/StandardPriceStrategy.js";
import SummaryDisplayObserver from "./observer/SummaryDisplayObserver.js";

export default class BookingCalculator{
      constructor(){
            this.packageStrategy = new StandardPriceStrategy()
            this.serviceStrategy = new AdditionalServiceStrategy()

            // 基本料金の設定
            this.basePackagePrice = document.getElementById("js_basic_price").value; // 基本パッケージ料金
            // オブザーバーリスト
            this.observers = []
            // DOM要素の取得
            this.initializeElements();
            // オブザーバーの登録
            this.registerDisplayObservers();
            this.initializeEvents();
            // 初期計算と通知
            this.calculateAndNotify();
      }


      // DOM要素の初期化
      initializeElements() {
            // フォーム要素
            this.elements = {
                  // 追加サービス関連
                  serviceCheckboxes: document.querySelectorAll('.js_service_checkbox'),
                  servicePriceElement: document.querySelector('.additional-service-price'),
                  
                  // 旅行者数関連
                  travelersSelect: document.getElementById('travelers'),
                  numberElement: document.querySelector('.js_number'),
                  tourPriceElement: document.querySelector('.tour-price'),
                  
                  // パッケージ関連
                  optionCards: document.querySelectorAll('.option-card'),
                  
                  // 日付関連
                  dateInput: document.getElementById('date_range_start'),
                  
                  // 選択されたパッケージ情報
                  selectedPackageName: '',
                  selectedPackagePrice: this.basePackagePrice
            };
      }

      // 表示オブザーバーの登録
      registerDisplayObservers() {
            // サマリー表示のオブザーバーを登録
            this.registerObserver(new SummaryDisplayObserver({
                  packageTotal: document.getElementById('package-total'),
                  serviceTotal: document.querySelector('.additional-service-price'),
                  grandTotal: document.querySelector('.total-price'),
                  paymentTotal: document.getElementById('payment-total'),
                  depositAmount: document.getElementById('deposit-amount'),
                  touristNumber: document.getElementById('summary-travelers'),
            }));
      }

      // オブザーバー登録メソッド
      registerObserver(observer) {
            this.observers.push(observer);
      }

      // オブザーバーへの通知メソッド
      notifyObservers(priceData) {
            this.observers.forEach(observer => {
                  observer.update(priceData);
            });
      }

      // イベントリスナーの初期化
      initializeEvents() {
            // 追加サービスのチェックボックス変更イベント
            if (this.elements.serviceCheckboxes) {
                  this.elements.serviceCheckboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', () => {
                              this.calculateAndNotify();
                        });
                  });
            }
            
            // 旅行者数変更イベント
            if (this.elements.travelersSelect) {
                  this.elements.travelersSelect.addEventListener('change', () => {
                        this.calculateAndNotify();
                  });
            }
            
            // パッケージ選択イベント
            if (this.elements.optionCards) {
                  this.elements.optionCards.forEach(card => {
                        card.addEventListener('click', () => {
                              // 選択状態の更新
                              this.elements.optionCards.forEach(c => c.classList.remove('selected'));
                              card.classList.add('selected');
                              
                              // 選択されたパッケージ情報の更新
                              this.elements.selectedPackageName = card.dataset.itinerary || '';
                              this.elements.selectedPackagePrice = parseInt(card.dataset.price) || this.basePackagePrice;
                              
                              // 計算と通知
                              this.calculateAndNotify();
                        });
                  });
            }
            
            // 日付選択イベント
            if (this.elements.dateInput) {
                  this.elements.dateInput.addEventListener('change', () => {
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
            // 現在の状態から計算に必要なデータを収集
            const travelers = parseInt(this.elements.travelersSelect?.value) || 1;
            
            // サービスデータの収集
            const services = Array.from(this.elements.serviceCheckboxes || []).map(checkbox => ({
                  checked: checkbox.checked,
                  price: parseInt(checkbox.dataset.price) || 0
            }));
            
            // 選択されたパッケージと日付
            const selectedPackageName = this.elements.selectedPackageName;
            const basePrice = this.elements.selectedPackagePrice || this.basePackagePrice;
            const selectedDate = this.elements.dateInput?.value || '';
            
            // 計算オプション
            const options = {
                  travelers,
                  services
            };

            console.log(travelers);

            // 戦略パターンを使って計算
            const packageTotal = this.packageStrategy.calculate(basePrice, options);
            const serviceTotal = this.serviceStrategy.calculate(0, options);
            const grandTotal = packageTotal + serviceTotal;
            
            // 結果をオブザーバーに通知
            this.notifyObservers({
                  packageTotal,
                  serviceTotal,
                  grandTotal,
                  basePrice,
                  travelers,
                  packageName: selectedPackageName,
                  selectedDate,
            });
      }
}