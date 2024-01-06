<?php

namespace Database\Seeders;

use App\Models\Socmed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Socmed::create([
            'name' => 'WhatsApp',
            'icon' => '<div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] sm:w-[40px] sm:h-[40px]" viewBox="0 0 30 31" fill="none">
                <g clip-path="url(#clip0_145_601)">
                <path d="M2.50502 28L4.19502 21.79C3.08144 19.8811 2.49639 17.71 2.50002 15.5C2.50002 8.59625 8.09627 3 15 3C21.9038 3 27.5 8.59625 27.5 15.5C27.5 22.4037 21.9038 28 15 28C12.791 28.0036 10.6208 27.419 8.71252 26.3063L2.50502 28ZM10.4888 9.635C10.3273 9.64502 10.1696 9.68754 10.025 9.76C9.88942 9.83679 9.76564 9.93278 9.65752 10.045C9.50752 10.1863 9.42252 10.3087 9.33127 10.4275C8.86928 11.0287 8.62078 11.7668 8.62502 12.525C8.62752 13.1375 8.78752 13.7338 9.03752 14.2913C9.54877 15.4187 10.39 16.6125 11.5013 17.7188C11.7688 17.985 12.03 18.2525 12.3113 18.5013C13.6905 19.7156 15.3341 20.5913 17.1113 21.0588L17.8225 21.1675C18.0538 21.18 18.285 21.1625 18.5175 21.1512C18.8816 21.1325 19.237 21.0339 19.5588 20.8625C19.7663 20.7525 19.8638 20.6975 20.0375 20.5875C20.0375 20.5875 20.0913 20.5525 20.1938 20.475C20.3625 20.35 20.4663 20.2612 20.6063 20.115C20.71 20.0075 20.8 19.8813 20.8688 19.7375C20.9663 19.5338 21.0638 19.145 21.1038 18.8212C21.1338 18.5737 21.125 18.4388 21.1213 18.355C21.1163 18.2213 21.005 18.0825 20.8838 18.0238L20.1563 17.6975C20.1563 17.6975 19.0688 17.2238 18.405 16.9213C18.335 16.8907 18.26 16.8734 18.1838 16.87C18.0982 16.8612 18.0118 16.8708 17.9303 16.8982C17.8488 16.9256 17.7741 16.9701 17.7113 17.0287V17.0262C17.705 17.0262 17.6213 17.0975 16.7175 18.1925C16.6656 18.2622 16.5942 18.3149 16.5123 18.3438C16.4303 18.3728 16.3417 18.3767 16.2575 18.355C16.1761 18.3332 16.0963 18.3057 16.0188 18.2725C15.8638 18.2075 15.81 18.1825 15.7038 18.1363L15.6975 18.1338C14.9824 17.8215 14.3203 17.3998 13.735 16.8838C13.5775 16.7463 13.4313 16.5962 13.2813 16.4513C12.7895 15.9803 12.3609 15.4475 12.0063 14.8663L11.9325 14.7475C11.8795 14.6677 11.8367 14.5816 11.805 14.4913C11.7575 14.3075 11.8813 14.16 11.8813 14.16C11.8813 14.16 12.185 13.8275 12.3263 13.6475C12.4439 13.4979 12.5536 13.3423 12.655 13.1813C12.8025 12.9438 12.8488 12.7 12.7713 12.5113C12.4213 11.6562 12.0588 10.805 11.6863 9.96C11.6125 9.7925 11.3938 9.6725 11.195 9.64875C11.1275 9.64125 11.06 9.63375 10.9925 9.62875C10.8246 9.62041 10.6564 9.62208 10.4888 9.63375V9.635Z" fill="#1F9F2E"/>
                </g>
              <defs>
                <clipPath id="clip0_145_601">
                  <rect width="30" height="30" fill="white" transform="translate(0 0.5)"/>
                </clipPath>
              </defs>
            </svg>
          </div>'
        ]);

        Socmed::create([
            'name' => 'Email',
            'icon' => '<div><svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] sm:w-[40px] sm:h-[40px]" viewBox="0 0 30 30" fill="none">
            <g clip-path="url(#clip0_145_623)">
              <path d="M3.75 3.75H26.25C26.5815 3.75 26.8995 3.8817 27.1339 4.11612C27.3683 4.35054 27.5 4.66848 27.5 5V25C27.5 25.3315 27.3683 25.6495 27.1339 25.8839C26.8995 26.1183 26.5815 26.25 26.25 26.25H3.75C3.41848 26.25 3.10054 26.1183 2.86612 25.8839C2.6317 25.6495 2.5 25.3315 2.5 25V5C2.5 4.66848 2.6317 4.35054 2.86612 4.11612C3.10054 3.8817 3.41848 3.75 3.75 3.75ZM15.075 14.6037L7.06 7.7975L5.44125 9.7025L15.0912 17.8963L24.5675 9.69625L22.9325 7.805L15.0763 14.6037H15.075Z" fill="#1F9F2E"/>
            </g>
            <defs>
              <clipPath id="clip0_145_623">
                <rect width="30" height="30" fill="white"/>
              </clipPath>
            </defs>
          </svg></div>'
        ]);

        Socmed::create([
            'name' => 'Facebook',
            'icon' => '<div><svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] sm:w-[40px] sm:h-[40px]" viewBox="0 0 40 41" fill="none">
            <path d="M34.8359 3.83331H5.16927C4.68304 3.83331 4.21673 4.02647 3.87291 4.37028C3.52909 4.7141 3.33594 5.18042 3.33594 5.66665V35.3333C3.33594 35.5741 3.38336 35.8125 3.47549 36.0349C3.56763 36.2573 3.70267 36.4594 3.87291 36.6297C4.04315 36.7999 4.24525 36.935 4.46768 37.0271C4.69011 37.1192 4.92851 37.1666 5.16927 37.1666H21.1359V24.25H16.8026V19.25H21.1359V15.5C21.0462 14.6196 21.1501 13.7302 21.4405 12.8942C21.7308 12.0582 22.2005 11.2959 22.8167 10.6607C23.4329 10.0254 24.1806 9.53271 25.0073 9.21704C25.8341 8.90137 26.7199 8.7704 27.6026 8.83331C28.8998 8.82533 30.1964 8.89211 31.4859 9.03331V13.5333H28.8359C26.7359 13.5333 26.3359 14.5333 26.3359 15.9833V19.2H31.3359L30.6859 24.2H26.3359V37.1666H34.8359C35.0767 37.1666 35.3151 37.1192 35.5375 37.0271C35.76 36.935 35.9621 36.7999 36.1323 36.6297C36.3025 36.4594 36.4376 36.2573 36.5297 36.0349C36.6218 35.8125 36.6693 35.5741 36.6693 35.3333V5.66665C36.6693 5.42589 36.6218 5.18749 36.5297 4.96506C36.4376 4.74263 36.3025 4.54052 36.1323 4.37028C35.9621 4.20004 35.76 4.065 35.5375 3.97287C35.3151 3.88073 35.0767 3.83331 34.8359 3.83331Z" fill="#1F9F2E"/>
          </svg></div>'
        ]);

        Socmed::create([
            'name' => 'Instagram',
            'icon' => '<div><svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] sm:w-[40px] sm:h-[40px]" viewBox="0 0 40 41" fill="none">
            <g clip-path="url(#clip0_156_9210)">
              <path d="M20.0026 3.83331C24.5309 3.83331 25.0959 3.84998 26.8726 3.93331C28.6476 4.01665 29.8559 4.29498 30.9193 4.70831C32.0193 5.13165 32.9459 5.70498 33.8726 6.62998C34.7201 7.46314 35.3759 8.47096 35.7943 9.58331C36.2059 10.645 36.4859 11.855 36.5693 13.63C36.6476 15.4066 36.6693 15.9716 36.6693 20.5C36.6693 25.0283 36.6526 25.5933 36.5693 27.37C36.4859 29.145 36.2059 30.3533 35.7943 31.4166C35.3771 32.5296 34.7211 33.5377 33.8726 34.37C33.0392 35.2172 32.0315 35.8729 30.9193 36.2916C29.8576 36.7033 28.6476 36.9833 26.8726 37.0666C25.0959 37.145 24.5309 37.1666 20.0026 37.1666C15.4743 37.1666 14.9093 37.15 13.1326 37.0666C11.3576 36.9833 10.1493 36.7033 9.08594 36.2916C7.97315 35.8741 6.96515 35.2182 6.1326 34.37C5.28495 33.537 4.62916 32.5291 4.21094 31.4166C3.7976 30.355 3.51927 29.145 3.43594 27.37C3.3576 25.5933 3.33594 25.0283 3.33594 20.5C3.33594 15.9716 3.3526 15.4066 3.43594 13.63C3.51927 11.8533 3.7976 10.6466 4.21094 9.58331C4.628 8.47028 5.28394 7.46218 6.1326 6.62998C6.96539 5.78203 7.97332 5.1262 9.08594 4.70831C10.1493 4.29498 11.3559 4.01665 13.1326 3.93331C14.9093 3.85498 15.4743 3.83331 20.0026 3.83331ZM20.0026 12.1666C17.7925 12.1666 15.6729 13.0446 14.11 14.6074C12.5472 16.1702 11.6693 18.2898 11.6693 20.5C11.6693 22.7101 12.5472 24.8297 14.11 26.3925C15.6729 27.9553 17.7925 28.8333 20.0026 28.8333C22.2127 28.8333 24.3324 27.9553 25.8952 26.3925C27.458 24.8297 28.3359 22.7101 28.3359 20.5C28.3359 18.2898 27.458 16.1702 25.8952 14.6074C24.3324 13.0446 22.2127 12.1666 20.0026 12.1666ZM30.8359 11.75C30.8359 11.1974 30.6164 10.6675 30.2257 10.2768C29.835 9.88614 29.3051 9.66665 28.7526 9.66665C28.2001 9.66665 27.6702 9.88614 27.2795 10.2768C26.8888 10.6675 26.6693 11.1974 26.6693 11.75C26.6693 12.3025 26.8888 12.8324 27.2795 13.2231C27.6702 13.6138 28.2001 13.8333 28.7526 13.8333C29.3051 13.8333 29.835 13.6138 30.2257 13.2231C30.6164 12.8324 30.8359 12.3025 30.8359 11.75ZM20.0026 15.5C21.3287 15.5 22.6005 16.0268 23.5381 16.9644C24.4758 17.9021 25.0026 19.1739 25.0026 20.5C25.0026 21.8261 24.4758 23.0978 23.5381 24.0355C22.6005 24.9732 21.3287 25.5 20.0026 25.5C18.6765 25.5 17.4048 24.9732 16.4671 24.0355C15.5294 23.0978 15.0026 21.8261 15.0026 20.5C15.0026 19.1739 15.5294 17.9021 16.4671 16.9644C17.4048 16.0268 18.6765 15.5 20.0026 15.5Z" fill="#1F9F2E"/>
            </g>
            <defs>
              <clipPath id="clip0_156_9210">
                <rect width="40" height="40" fill="white" transform="translate(0 0.5)"/>
              </clipPath>
            </defs>
          </svg></div>'
        ]);

        Socmed::create([
            'name' => 'Alamat',
            'icon' => '<div><svg xmlns="http://www.w3.org/2000/svg" class="aspect-square w-[30px] sm:w-[40px]" viewBox="0 0 20 20" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0251 1.66671C11.9084 1.67504 13.7084 2.42504 15.0251 3.74171C16.3501 5.06671 17.0917 6.85838 17.0834 8.71671V8.75838C17.0334 11.2834 15.6167 13.6084 13.8501 15.425C12.8501 16.45 11.7417 17.3584 10.5334 18.125C10.2084 18.4 9.73341 18.4 9.40841 18.125C7.61675 16.9584 6.03341 15.4917 4.75008 13.7834C3.62508 12.3 2.98341 10.5167 2.91675 8.65838C2.93341 4.78338 6.11675 1.65837 10.0251 1.66671ZM10.0251 11.05C10.6167 11.05 11.1834 10.825 11.6001 10.4167C12.0334 9.9917 12.2759 9.42587 12.2759 8.83337C12.2759 7.60004 11.2667 6.60837 10.0251 6.60837C8.78341 6.60837 7.78341 7.60004 7.78341 8.83337C7.78341 10.0509 8.76675 11.0334 10.0001 11.05H10.0251Z" fill="#1F9F2E"/>
          </svg></div>'
        ]);
    }
}
