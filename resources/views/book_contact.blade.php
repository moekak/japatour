@extends('layout.default')
@section('style')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
@endsection

@section('main')
      @include('components.header')
      <div style='font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                  <div class="px-40 flex flex-1 justify-center py-5">
                        <form action="{{route("sendMessage")}}" method="POST" class="layout-content-container flex flex-col max-w-[960px] flex-1 js_form">
                              @csrf
                              <div class="flex flex-wrap justify-between gap-3 p-4">
                                    <div class="flex min-w-72 flex-col gap-3">
                                          <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight">Contact Us</p>
                                          <p class="text-[#637588] text-sm font-normal leading-normal">We're here to help! Reach out to us with any questions or inquiries you may have.</p>
                                    </div>
                              </div>
                              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                    <label class="flex flex-col min-w-40 flex-1">
                                          <p class="text-[#111418] text-base font-medium leading-normal pb-2">Full Name</p>
                                          <input
                                                placeholder="Enter your name"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dce0e5] bg-white focus:border-[#dce0e5] h-14 placeholder:text-[#637588] p-[15px] text-base font-normal leading-normal"
                                                value=""
                                                name="name"
                                          />
                                    </label>
                              </div>
                              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                    <label class="flex flex-col min-w-40 flex-1">
                                          <p class="text-[#111418] text-base font-medium leading-normal pb-2">Email</p>
                                          <input
                                                placeholder="Enter your email"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dce0e5] bg-white focus:border-[#dce0e5] h-14 placeholder:text-[#637588] p-[15px] text-base font-normal leading-normal"
                                                value=""
                                                name="email"
                                          />
                                    </label>
                              </div>
                              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                    <label class="flex flex-col min-w-40 flex-1">
                                          <p class="text-[#111418] text-base font-medium leading-normal pb-2">Message</p>
                                          <textarea
                                                name="body" 
                                                placeholder="Enter your message"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dce0e5] bg-white focus:border-[#dce0e5] min-h-36 placeholder:text-[#637588] p-[15px] text-base font-normal leading-normal"
                                          ></textarea>
                                    </label>
                              </div>
                              <div class="flex px-4 py-3 justify-start">
                                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1672ce] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                          <span class="truncate">Submit</span>
                                    </button>
                              </div>
                              <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Contact Information</h2>
                              <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">Email: info@japatour-official.com</p>
                              <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                        </form>
                  </div>
            </div>
      </div>
@endsection


@section('script')
      <script src="{{mix("js/common.js")}}"></script>
      <script src="https://www.google.com/recaptcha/api.js?render=6LdFXfsqAAAAAF7fDOUEvJDmIxAaLFb_nfPNMMle"></script>
      <script>
            document.addEventListener('DOMContentLoaded', function() {
                  var submitForm = document.querySelector(".js_form")
                  if (submitForm) {
                        submitForm.addEventListener('submit', function(e) {
                              e.preventDefault(); // フォームの自動送信を防止


                              grecaptcha.ready(function() {
                              grecaptcha.execute('6LdFXfsqAAAAAF7fDOUEvJDmIxAaLFb_nfPNMMle', {action: 'submit'}).then(function(token) {
                                    document.getElementById('recaptchaResponse').value = token;
                                    document.querySelector('form').submit(); // フォームを送信
                              });
                              });
                        });
                  } else {
                        console.error('Submit button not found');
                  }
            });
      </script>
@endsection










