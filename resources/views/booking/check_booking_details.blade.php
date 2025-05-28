@extends('layouts.master')
@section('content')
    @if ($bookingDetails->is_paid)
        <x-nav />
        <main class="flex flex-col w-full max-w-[1280px] mx-auto px-16 gap-9 mt-16">
            <div class="flex flex-col gap-6">
                <div class="flex items-center gap-2">
                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Home</p>
                    <p class="font-semibold leading-5 text-patungan-grey">></p>
                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Pesanan Saya
                    </p>
                </div>
                <h1 class="font-Grifter font-bold text-[32px] leading-[33px]">Detail Pesanan Kamu</h1>
            </div>
            <div class="flex gap-9 mb-20">
                <div id="Details-tab" class="flex flex-col w-[670px] shrink-0 gap-9">
                    <div id="Tab-Links" class="grid grid-cols-2 w-full max-w-[520px] gap-6">
                        <label
                            class="tab-link group flex justify-between items-center w-full rounded-[18px] py-4 px-6 gap-2 bg-white transition-all duration-300 has-[:checked]:bg-patungan-black"
                            data-target-tab="#Broadcast-Message-Tab">
                            <span class="font-bold leading-5 text-nowrap group-has-[:checked]:text-white">Broadcast
                                Message</span>
                            <div class="w-6 h-6 relative flex shrink-0">
                                <img src="{{ asset('assets/images/icons/messages-black.svg') }}"
                                    class="absolute w-6 top-0 opacity-100 group-has-[:checked]:opacity-0 transition-all duration-300"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/messages-white.svg') }}"
                                    class="absolute w-6 top-0 opacity-0 group-has-[:checked]:opacity-100 transition-all duration-300"
                                    alt="icon">
                            </div>
                            <input type="radio" name="tab" class="hidden" checked>
                        </label>
                        <label
                            class="tab-link group flex justify-between items-center w-full rounded-[18px] py-4 px-6 gap-2 bg-white transition-all duration-300 has-[:checked]:bg-patungan-black"
                            data-target-tab="#Order-Details-Tab">
                            <span class="font-bold leading-5 text-nowrap group-has-[:checked]:text-white">Order
                                Details</span>
                            <div class="w-6 h-6 relative flex shrink-0">
                                <img src="{{ asset('assets/images/icons/receipt-text-black.svg') }}"
                                    class="absolute w-6 top-0 opacity-100 group-has-[:checked]:opacity-0 transition-all duration-300"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/receipt-text-white.svg') }}"
                                    class="absolute w-6 top-0 opacity-0 group-has-[:checked]:opacity-100 transition-all duration-300"
                                    alt="icon">
                            </div>
                            <input type="radio" name="tab" class="hidden">
                        </label>
                    </div>
                    <div id="Tab-Contents" class="flex">
                        <div id="Broadcast-Message-Tab" class="tab-content flex flex-col w-full gap-9">
                            <div id="Delivery" class="flex flex-col rounded-[32px] p-8 gap-8 bg-white overflow-hidden">
                                <div
                                    class="flex items-center justify-between rounded-3xl border border-patungan-border p-6 gap-6">
                                    <div class="flex items-center gap-4">
                                        <div class="flex w-[62px] h-[62px] shrink-0 rounded-xl overflow-hidden">
                                            <img src="{{ asset('assets/images/logos/netflix.png') }}"
                                                class="w-full h-full object-contain" alt="logo">
                                        </div>
                                        <div>
                                            <p class="font-bold text-xl leading-[25px]">Netflix</p>
                                            <p class="text-patungan-grey">
                                                <span class="font-semibold text-xl leading-[25px]">Rp46.500</span>
                                                <span class="font-bold leading-5">/person</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                        <img src="{{ asset('assets/images/icons/clock-red.svg') }}"
                                            class="w-6 flex shrink-0" alt="icon">
                                        <p class="font-bold leading-5 text-patungan-red">1 month</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-xl leading-[25px]">Broadcast Massage</h2>
                                        <p id="Badge"
                                            class="w-fit p-[12px_24px] rounded-full bg-[#3D7452] font-bold text-lg leading-[22px] text-white">
                                            Delivery</p>
                                    </div>
                                    <div class="message-card flex gap-4">
                                        <div class="flex w-16 h-16 rounded-full shrink-0 overflow-hidden">
                                            <img src="{{ asset('assets/images/icons/Profile-logo.svg') }}"
                                                class="w-full h-full object-cover" alt="profile">
                                        </div>
                                        <div
                                            class="flex flex-col flex-1 rounded-3xl rounded-tl-[4px] p-6 gap-6 bg-patungan-bg-grey">
                                            <div class="message-text">
                                                <p class="font-semibold text-lg leading-8">
                                                    Hooray, the group quantity has been fulfilled. Please log in to the
                                                    account with the following information
                                                </p>
                                                <br>
                                                <p class="font-semibold text-lg leading-8">
                                                    Netflix Email <br>
                                                    Email: Patungan@gmail.com <br>
                                                    Password: lebihhemat123! <br>
                                                </p>
                                                <br>
                                                <p class="font-semibold text-lg leading-8">
                                                    Netflix User <br>
                                                    Name: Bimore Atreides <br>
                                                    PIN: 32222 <br>
                                                </p>
                                                <br>
                                                <p class="font-semibold text-lg leading-8">
                                                    If you encounter any issues, please contact us. Enjoy!
                                                </p>
                                            </div>

                                            <span class="time font-bold leading-5 text-patungan-grey">Today, 02:22 AM</span>
                                        </div>
                                    </div>
                                    <div class="message-card flex gap-4">
                                        <div class="flex w-16 h-16 rounded-full shrink-0 overflow-hidden">
                                            <img src="{{ asset('assets/images/icons/Profile-logo.svg') }}"
                                                class="w-full h-full object-cover" alt="profile">
                                        </div>
                                        <div
                                            class="flex flex-col flex-1 rounded-3xl rounded-tl-[4px] p-6 gap-6 bg-patungan-bg-grey">
                                            <div class="message-text">
                                                <p class="font-semibold text-lg leading-8">
                                                    Pesanan Anda berhasil diverifikasi. Mohon menunggu hingga grup mencapai
                                                    jumlah yang diperlukan sebelum kami mengirimkan akun yang Anda inginkan.
                                                    Terima kasih atas kesabaran Anda! Jika ada kendala, kami akan segera
                                                    menghubungi Anda.
                                                </p>
                                            </div>

                                            <span class="time font-bold leading-5 text-patungan-grey">Yesterday, 12:22
                                                AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Success" class="flex flex-col rounded-[32px] p-8 gap-8 bg-white overflow-hidden">
                                <div
                                    class="flex items-center justify-between rounded-3xl border border-patungan-border p-6 gap-6">
                                    <div class="flex items-center gap-4">
                                        <div class="flex w-[62px] h-[62px] shrink-0 rounded-xl overflow-hidden">
                                            <img src="{{ asset('assets/images/logos/netflix.png') }}"
                                                class="w-full h-full object-contain" alt="logo">
                                        </div>
                                        <div>
                                            <p class="font-bold text-xl leading-[25px]">Netflix</p>
                                            <p class="text-patungan-grey">
                                                <span class="font-semibold text-xl leading-[25px]">Rp46.500</span>
                                                <span class="font-bold leading-5">/person</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                        <img src="{{ asset('assets/images/icons/clock-red.svg') }}"
                                            class="w-6 flex shrink-0" alt="icon">
                                        <p class="font-bold leading-5 text-patungan-red">1 month</p>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-xl leading-[25px]">Broadcast Massage</h2>
                                        <p id="Badge"
                                            class="w-fit p-[12px_24px] rounded-full bg-[#007B9D] font-bold text-lg leading-[22px] text-white">
                                            Success</p>
                                    </div>
                                    <div class="message-card flex gap-4">
                                        <div class="flex w-16 h-16 rounded-full shrink-0 overflow-hidden">
                                            <img src="{{ asset('assets/images/icons/Profile-logo.svg') }}"
                                                class="w-full h-full object-cover" alt="profile">
                                        </div>
                                        <div
                                            class="flex flex-col flex-1 rounded-3xl rounded-tl-[4px] p-6 gap-6 bg-patungan-bg-grey">
                                            <div class="message-text">
                                                <p class="font-semibold text-lg leading-8">
                                                    Pesanan Anda berhasil diverifikasi. Mohon menunggu hingga grup mencapai
                                                    jumlah yang diperlukan sebelum kami mengirimkan akun yang Anda inginkan.
                                                    Terima kasih atas kesabaran Anda! Jika ada kendala, kami akan segera
                                                    menghubungi Anda.
                                                </p>
                                            </div>

                                            <span class="time font-bold leading-5 text-patungan-grey">Yesterday, 12:22
                                                AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Order-Details-Tab" class="tab-content flex flex-col w-full hidden">
                            <div class="flex flex-col rounded-[32px] p-8 gap-8 bg-white overflow-hidden">
                                <div id="Order-Summary" class="flex flex-col gap-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-xl leading-[25px]">Order Summary</h2>
                                        <p id="Badge"
                                            class="w-fit p-[12px_24px] rounded-full bg-[#3D7452] font-bold text-lg leading-[22px] text-white">
                                            Delivery</p>
                                    </div>
                                    <div
                                        class="flex flex-col justify-between rounded-3xl border border-patungan-border p-6 gap-6">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-4">
                                                <div class="flex w-[62px] h-[62px] shrink-0 rounded-xl overflow-hidden">
                                                    <img src="{{ asset('assets/images/logos/netflix.png') }}"
                                                        class="w-full h-full object-contain" alt="logo">
                                                </div>
                                                <div>
                                                    <p class="font-bold text-xl leading-[25px]">Netflix</p>
                                                    <p class="text-patungan-grey">
                                                        <span class="font-semibold text-xl leading-[25px]">Rp46.500</span>
                                                        <span class="font-bold leading-5">/person</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                                <img src="{{ asset('assets/images/icons/clock-red.svg') }}"
                                                    class="w-6 flex shrink-0" alt="icon">
                                                <p class="font-bold leading-5 text-patungan-red">1 month</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-4">
                                            <hr class="border-patungan-border">
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Date</p>
                                                <p class="font-bold text-xl leading-[25px]">Sun, 15 Sep 2024</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Original
                                                    Price</p>
                                                <p class="font-bold text-xl leading-[25px]">Rp186.000</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Harga
                                                    Patungan</p>
                                                <p class="font-bold text-xl leading-[25px]">Rp46.500</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Durasi
                                                </p>
                                                <p class="font-bold text-xl leading-[25px]">1 Month</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Group
                                                    Capacity</p>
                                                <p class="font-bold text-xl leading-[25px]">4</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PPN 11%
                                                </p>
                                                <p class="font-bold text-xl leading-[25px]">Rp10.000</p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Total
                                                    Price</p>
                                                <p class="font-bold text-xl leading-[25px] text-patungan-red">Rp56.500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Personal-Information" class="flex flex-col gap-5">
                                    <h2 class="font-bold text-xl leading-[25px]">Personal Informations</h2>
                                    <hr class="border-patungan-border">
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">Full Name</p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/profile-circle-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border"></div>
                                            <input type="text" value="Bimore Atreides" readonly
                                                class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black">
                                        </div>
                                    </label>
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">WhatsApp Number</p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/whatsapp-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border"></div>
                                            <input type="tel" value="+6281292930923" readonly
                                                class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black">
                                        </div>
                                    </label>
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">Email Address</p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/sms-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border"></div>
                                            <input type="email" value="Bimore@Shaynakit.com" readonly
                                                class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black">
                                        </div>
                                    </label>
                                </div>
                                <div id="Transfer-Informations" class="flex flex-col gap-5">
                                    <h2 class="font-bold text-xl leading-[25px]">Transfer Informations</h2>
                                    <div
                                        class="group flex flex-col w-full rounded-3xl border border-[#F1F1F1] p-6 bg-white">
                                        <label class="flex items-center w-full justify-between h-10 overflow-hidden">
                                            <img src="{{ asset('assets/images/logos/bca.svg') }}"
                                                class="h-10 flex shrink-0 object-contain" alt="logo">
                                            <input type="radio" name="payment-method" checked readonly
                                                class="appearance-none w-6 h-6 rounded-full mr-[2px] ring-[1.5px] ring-patungan-border checked:ring-patungan-orange border-4 border-white bg-white checked:bg-patungan-orange transition-all duration-300">
                                        </label>
                                        <div
                                            class="content h-0 group-has-[:checked]:!h-[114px] transition-all duration-300 overflow-hidden">
                                            <hr class="border-patungan-border my-4">
                                            <div class="bank-details flex items-center justify-between">
                                                <div class="flex flex-col gap-[6px]">
                                                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey">
                                                        Transfer to</p>
                                                    <p class="Transfer-To font-bold text-xl leading-[25px]">1935 0009 1200
                                                    </p>
                                                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PT
                                                        Seaccount Angga</p>
                                                </div>
                                                <button type="button" class="copy-btn flex items-center gap-[6px]"
                                                    onclick="copyTransferTo(this)">
                                                    <img src="{{ asset('assets/images/icons/copy-orange.svg') }}"
                                                        class="w-6 flex shrink-0" alt="icon">
                                                    <span
                                                        class="font-semibold text-lg leading-[22px] text-patungan-orange">Copy</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Name</p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/bank-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border -mr-4"></div>
                                            <select
                                                class="px-4 appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black pointer-events-none">
                                                <option value="" selected>Bank Syariah</option>
                                            </select>
                                        </div>
                                    </label>
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Account Name
                                        </p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/user-octagon-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border"></div>
                                            <input type="text" value="Shadam Bimo" readonly
                                                class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                                placeholder="Atas Nama Siapa?">
                                        </div>
                                    </label>
                                    <label class="flex flex-col gap-4">
                                        <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Account Number
                                        </p>
                                        <div
                                            class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                            <img src="{{ asset('assets/images/icons/blend-black.svg') }}"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <div class="flex h-6 border border-patungan-border"></div>
                                            <input type="text" value="5000 2000 3000" readonly
                                                class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                                pattern="[0-9 ]*" title="Only numbers and spaces are allowed"
                                                placeholder="Nomor Rekening Kamu?">
                                        </div>
                                    </label>
                                </div>
                                <div id="Payment-Proof" class="flex flex-col gap-4">
                                    <h2 class="font-bold text-xl leading-[25px]">Payment Proof</h2>
                                    <div
                                        class="relative flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                        <img src="{{ asset('assets/images/icons/gallery-import-black.svg') }}"
                                            class="w-6 h-6 flex shrink-0" alt="icon">
                                        <div class="flex h-6 border border-patungan-border"></div>
                                        <p id="File-Name" class="w-full font-bold text-xl leading-[25px]">
                                            screenshot.png')}}
                                        </p>
                                        <a href="#"
                                            class="font-semibold text-lg leading-[22px] text-patungan-orange text-nowrap">View
                                            Image</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Member-Status" class="flex flex-col w-full max-w-[446px] rounded-[32px] overflow-hidden">
                    <div
                        class="relative flex items-center text-center px-6 pt-8 pb-16 -mb-8 bg-[linear-gradient(113.19deg,#E25520_0%,#A83279_100.41%)] overflow-hidden">
                        <img src="{{ asset('assets/images/backgrounds/header-lines-bg-small.svg') }}"
                            class="absolute top-0 w-full h-full object-cover object-top" alt="background">
                        <div class="relative w-full">
                            <p class="font-semibold text-xl leading-[25px] text-[#E2B9BB]">Your Booking Code:</p>
                            <p class="font-bold text-[32px] leading-10 text-white">Patungan2050</p>
                        </div>
                    </div>
                    <div class="relative flex flex-col rounded-[32px] p-8 gap-6 bg-white">
                        <h2 class="font-bold text-xl leading-[25px]">Group Member 2/4</h2>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/icons/member.svg') }}"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <p class="font-bold text-xl leading-[25px]">You</p>
                                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Joined Sun,15 Sep
                                        2024</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/icons/member.svg') }}"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <p class="font-bold text-xl leading-[25px]">Udin Marudin</p>
                                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Joined Sun,15 Sep
                                        2024</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/icons/waiting-member.svg') }}"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <p class="font-semibold text-xl italic leading-[25px] text-patungan-grey">Waiting
                                    someone...</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/icons/waiting-member.svg') }}"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <p class="font-semibold text-xl italic leading-[25px] text-patungan-grey">Waiting
                                    someone...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @push('after-scripts')
            <script src="{{ asset('js/nav-tab.js') }}"></script>
            <script src="{{ asset('js/copy.js') }}"></script>
            <script src="{{ asset('js/file-upload.js') }}"></script>
        @endpush
    @else
        <x-nav />
        <main class="flex flex-col h-full items-center justify-center px-16 py-16">
            <div class="flex flex-col gap-6 text-center">
                <div class="flex items-center justify-center gap-2">
                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Home</p>
                    <p class="font-semibold leading-5 text-patungan-grey">></p>
                    <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Pesanan
                        Saya
                    </p>
                </div>
                <h1 class="font-Grifter font-bold text-[32px] leading-[33px]">Detail Pesanan Kamu</h1>
            </div>
            <div class="flex flex-col w-full max-w-[762px] mt-6 rounded-[32px] overflow-hidden">
                <div
                    class="relative flex flex-col justify-center px-6 pt-8 pb-16 gap-1 -mb-8 text-center bg-[linear-gradient(113.19deg,#E25520_0%,#A83279_100.41%)]">
                    <img src="{{ asset('assets/images/backgrounds/header-lines-bg.svg') }}"
                        class="absolute w-full h-full object-cover object-top" alt="background">
                    <p class="relative font-semibold text-xl leading-[25px] text-[#E2B9BB]">Your Booking Code:</p>
                    <p class="relative font-bold text-[32px] leading-10 text-white">{{ $bookingDetails->booking_trx_id }}
                    </p>
                </div>
                <div class="relative flex flex-col items-center rounded-[32px] p-[52px] gap-8 bg-white overflow-hidden">
                    <div class="flex items-center w-fit rounded-full p-[12px_24px] gap-[6px] bg-patungan-yellow">
                        <img src="{{ asset('assets/images/icons/clock-white.svg') }}" class="w-6 flex shrink-0"
                            alt="icon">
                        <p class="font-bold text-lg leading-[22px] text-white">Status Booking Pending</p>
                    </div>
                    <div class="flex flex-col text-center gap-4">
                        <p class="font-Grifter font-bold text-[32px] leading-[50px] text-[#161616]">Akses grup patungan
                            tertunda
                            karena pesananmu sedang diverifikasi!</p>
                        <p class="font-['Poppins'] font-medium leading-[25px] text-patungan-grey">Sabar ya, Pesanan kamu
                            sedang
                            kami cek🙌🏻. setelah terverifikasi, kamu akan otomatis masuk ke grup patungan yang kami
                            sediakan 😉
                        </p>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection
