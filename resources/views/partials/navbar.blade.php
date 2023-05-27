<div class="kiri-container">

    <a href="{{ route('showchart') }}" class="">
        <button class="kotak-show {{ set_active('showchart') }}">
            <svg class="grafiksvg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.125 28.875C3.73542 28.875 3.40863 28.743 3.14463 28.479C2.88063 28.215 2.74909 27.8887 2.75 27.5C2.75 27.1104 2.882 26.7836 3.146 26.5196C3.41 26.2556 3.73634 26.1241 4.125 26.125H28.875C29.2646 26.125 29.5914 26.257 29.8554 26.521C30.1194 26.785 30.2509 27.1113 30.25 27.5C30.25 27.8896 30.118 28.2164 29.854 28.4804C29.59 28.7444 29.2637 28.8759 28.875 28.875H4.125ZM6.18751 24.75C5.61459 24.75 5.12738 24.5493 4.72588 24.1478C4.32438 23.7463 4.12409 23.2595 4.125 22.6875V17.1875C4.125 16.6146 4.32575 16.1274 4.72725 15.7259C5.12875 15.3244 5.6155 15.1241 6.18751 15.125C6.76042 15.125 7.24763 15.3258 7.64913 15.7273C8.05063 16.1288 8.25092 16.6155 8.25 17.1875V22.6875C8.25 23.2604 8.04925 23.7476 7.64775 24.1491C7.24625 24.5506 6.7595 24.7509 6.18751 24.75ZM13.0625 24.75C12.4896 24.75 12.0024 24.5493 11.6009 24.1478C11.1994 23.7463 10.9991 23.2595 11 22.6875V10.3125C11 9.73959 11.2008 9.25238 11.6023 8.85088C12.0038 8.44938 12.4905 8.24909 13.0625 8.25C13.6354 8.25 14.1226 8.45075 14.5241 8.85225C14.9256 9.25375 15.1259 9.7405 15.125 10.3125V22.6875C15.125 23.2604 14.9243 23.7476 14.5228 24.1491C14.1213 24.5506 13.6345 24.7509 13.0625 24.75ZM19.9375 24.75C19.3646 24.75 18.8774 24.5493 18.4759 24.1478C18.0744 23.7463 17.8741 23.2595 17.875 22.6875V14.4375C17.875 13.8646 18.0758 13.3774 18.4773 12.9759C18.8788 12.5744 19.3655 12.3741 19.9375 12.375C20.5104 12.375 20.9976 12.5758 21.3991 12.9773C21.8006 13.3788 22.0009 13.8655 22 14.4375V22.6875C22 23.2604 21.7993 23.7476 21.3978 24.1491C20.9963 24.5506 20.5095 24.7509 19.9375 24.75ZM26.8125 24.75C26.2396 24.75 25.7524 24.5493 25.3509 24.1478C24.9494 23.7463 24.7491 23.2595 24.75 22.6875V6.1875C24.75 5.61459 24.9508 5.12738 25.3523 4.72588C25.7538 4.32438 26.2405 4.12409 26.8125 4.125C27.3854 4.125 27.8726 4.32575 28.2741 4.72725C28.6756 5.12875 28.8759 5.6155 28.875 6.1875V22.6875C28.875 23.2604 28.6743 23.7476 28.2728 24.1491C27.8713 24.5506 27.3845 24.7509 26.8125 24.75Z" fill="#19456B"/>
            </svg>

            <span class="title-show-chart">Show Chart</span>
            {{-- <img src="assets/image/chart.svg" class="icon-chart"alt=""><span class="title-show-chart">Show Chart</span>     --}}
        </button>
    </a>

    <a href="{{ route('customerseg') }}" class="">
        <button class="kotak-customer {{ set_active('customerseg') }}">
            <svg class="personsvg" width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6667 10.6667C9.2 10.6667 7.94445 10.1444 6.9 9.1C5.85556 8.05556 5.33334 6.8 5.33334 5.33333C5.33334 3.86667 5.85556 2.61111 6.9 1.56667C7.94445 0.522222 9.2 0 10.6667 0C12.1333 0 13.3889 0.522222 14.4333 1.56667C15.4778 2.61111 16 3.86667 16 5.33333C16 6.8 15.4778 8.05556 14.4333 9.1C13.3889 10.1444 12.1333 10.6667 10.6667 10.6667ZM24.5333 25.0667L21.2 21.7333C20.7333 22 20.2333 22.2222 19.7 22.4C19.1667 22.5778 18.6 22.6667 18 22.6667C16.3333 22.6667 14.9169 22.0831 13.7507 20.916C12.5844 19.7489 12.0009 18.3324 12 16.6667C12 15 12.5836 13.5831 13.7507 12.416C14.9178 11.2489 16.3342 10.6658 18 10.6667C19.6667 10.6667 21.0836 11.2502 22.2507 12.4173C23.4178 13.5844 24.0009 15.0009 24 16.6667C24 17.2667 23.9111 17.8333 23.7333 18.3667C23.5556 18.9 23.3333 19.4 23.0667 19.8667L26.4 23.2C26.6444 23.4444 26.7667 23.7556 26.7667 24.1333C26.7667 24.5111 26.6444 24.8222 26.4 25.0667C26.1556 25.3111 25.8444 25.4333 25.4667 25.4333C25.0889 25.4333 24.7778 25.3111 24.5333 25.0667ZM18 20C18.9333 20 19.7222 19.6778 20.3667 19.0333C21.0111 18.3889 21.3333 17.6 21.3333 16.6667C21.3333 15.7333 21.0111 14.9444 20.3667 14.3C19.7222 13.6556 18.9333 13.3333 18 13.3333C17.0667 13.3333 16.2778 13.6556 15.6333 14.3C14.9889 14.9444 14.6667 15.7333 14.6667 16.6667C14.6667 17.6 14.9889 18.3889 15.6333 19.0333C16.2778 19.6778 17.0667 20 18 20ZM2.66667 21.3333C1.93334 21.3333 1.30534 21.072 0.782669 20.5493C0.260002 20.0267 -0.000886625 19.3991 2.26373e-06 18.6667V17.6333C2.26373e-06 16.8778 0.188891 16.1778 0.566669 15.5333C0.944447 14.8889 1.46667 14.4 2.13334 14.0667C3.26667 13.4889 4.54445 13 5.96667 12.6C7.38889 12.2 8.96667 12 10.7 12C10.2556 12.6889 9.91645 13.428 9.68267 14.2173C9.44889 15.0067 9.33245 15.8231 9.33334 16.6667C9.33334 17.4889 9.45022 18.2947 9.684 19.084C9.91778 19.8733 10.256 20.6231 10.6987 21.3333H2.66667Z" fill="#19456B"/>
            </svg>
            <span class="title-customer-seg">Customer Segmentation</span>

            {{-- <img src="assets/image/customer.svg" class="icon-customer"alt=""><span class="title-customer-seg">Customer Segmentation</span> --}}
        </button>
    </a>

    <a href="{{ route('marketbasket') }}" class="">
        <button class="kotak-market {{ set_active('marketbasket') }}">
            <svg class="marketsvg" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_9_149" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="3" width="35" height="29">
                <path d="M32.0833 8.02081C32.0833 7.44065 31.8528 6.88425 31.4426 6.47402C31.0324 6.06378 30.476 5.83331 29.8958 5.83331H5.10413C4.52396 5.83331 3.96757 6.06378 3.55733 6.47402C3.14709 6.88425 2.91663 7.44065 2.91663 8.02081V14.5833H32.0833V8.02081Z" fill="white" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.99829 28.4594L11.8766 19.4906L16.6745 24.0844L22.5385 18.9583L25.8052 22.1433" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32.0833 13.125V26.9792C32.0833 27.5593 31.8529 28.1157 31.4426 28.526C31.0324 28.9362 30.476 29.1667 29.8958 29.1667H8.75" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.9357 10.2083H27.0607M8.10095 10.2083H9.55929" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.91663 13.125V19.6875" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </mask>
                <g mask="url(#mask0_9_149)">
                <path d="M0 0H35V35H0V0Z" fill="#19456B"/>
                </g>
            </svg>
            <span class="title-market">Market Basket Analysis</span>

            {{-- <img src="assets/image/market.svg" class="icon-market"alt=""> <span class="title-market">Market Basket Analysis</span> --}}
        </button>
    </a>
    {{-- <p id="tes1"></p> --}}
</div>
