<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $renderer->render('includes/head.php', [
            'title' => 'A flexible FTP web application!',
        ]) ?>
    </head>
    <body>
        <div class="homepage-wrapper">
            <div class="overlay"></div>
            <header class="header">
                <div class="brand">
                    <h3 class="name uppercase">ftp app</h3>
                </div>
                <nav class="actions">
                    <ul class="list-inline">
                        <li>
                            <a target="_blank" href="https://github.com/ELAMRANI744/ftp-filemanager">
                                <button type="button" class="btn-primary btn-svg">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0011 8.5945e-07C4.47548 -0.0022943 0 4.59261 0 10.2639C0 14.7487 2.79969 18.5609 6.69869 19.961C7.22377 20.0964 7.14334 19.7131 7.14334 19.4515V17.6727C4.11127 18.0376 3.98838 15.9766 3.78505 15.6323C3.37392 14.9116 2.40197 14.728 2.69244 14.3837C3.38286 14.0188 4.08669 14.4756 4.90225 15.7126C5.49212 16.6101 6.64283 16.4586 7.22601 16.3094C7.35337 15.77 7.62596 15.288 8.00134 14.9139C4.85979 14.3356 3.55044 12.3663 3.55044 10.0252C3.55044 8.88914 3.91465 7.84485 4.62965 7.00253C4.17384 5.61396 4.6721 4.42506 4.73914 4.24834C6.03731 4.12899 7.38688 5.20312 7.4919 5.28804C8.22925 5.08377 9.07161 4.9759 10.0145 4.9759C10.9619 4.9759 11.8065 5.08836 12.5506 5.29493C12.803 5.09754 14.0543 4.17489 15.2609 4.28735C15.3257 4.46408 15.8128 5.62543 15.3838 6.99564C16.1077 7.84026 16.4764 8.89374 16.4764 10.0321C16.4764 12.3778 15.1581 14.3493 12.0076 14.9185C12.2774 15.1911 12.4917 15.5162 12.6379 15.8748C12.784 16.2334 12.8592 16.6183 12.8589 17.0071V19.5892C12.8768 19.7957 12.8589 20 13.1941 20C17.1512 18.6298 20 14.79 20 10.2662C20 4.59261 15.5223 8.5945e-07 10.0011 8.5945e-07V8.5945e-07Z"
                                              fill="white"/>
                                    </svg>
                                    github
                                </button>
                            </a>
                        </li>
                        <li>
                            <button type="button" class="btn-secondary">
                                features
                            </button>
                        </li>
                    </ul>
                </nav>
            </header>
            <section class="intro">
                <div class="row">
                    <div class="app-desc">
                        <h1 class="title">Best FTP Application online!</h1>
                        <p class="desc">Flexible and secure web application to manage your FTP files, with many basic
                            and advanced features.</p>
                        <ul class="actions list-inline">
                            <li>
                                <a href="<?= $filemanagerUrl ?>">
                                    <button type="button" class="btn-primary">
                                        get started!
                                    </button>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="btn-secondary">
                                    features
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="illustration">
                        <svg width="572" height="465" viewBox="0 0 572 465" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M204.974 399.581H6.35959C2.84729 399.581 0 402.428 0 405.94C0 409.452 2.84729 412.299 6.35959 412.299H204.974C208.487 412.299 211.334 409.452 211.334 405.94C211.334 402.428 208.487 399.581 204.974 399.581Z"
                                      fill="#58595B"/>
                                <path d="M6.61213 307.086V399.644H204.722V307.086C204.726 306.17 204.55 305.263 204.203 304.415C203.856 303.567 203.346 302.796 202.701 302.145C202.057 301.495 201.29 300.978 200.445 300.623C199.601 300.269 198.694 300.084 197.778 300.08H13.5556C12.6396 300.084 11.7334 300.269 10.8888 300.623C10.0441 300.978 9.27749 301.495 8.63272 302.145C7.98796 302.796 7.47764 303.567 7.13095 304.415C6.78425 305.263 6.60798 306.17 6.61213 307.086V307.086Z"
                                      fill="#58595B"/>
                                <path d="M12.3247 310.242L12.009 399.597L199.325 399.344V310.242C199.325 309.751 199.228 309.266 199.04 308.813C198.852 308.36 198.576 307.949 198.229 307.603C197.881 307.257 197.469 306.983 197.015 306.797C196.561 306.611 196.075 306.516 195.585 306.518H16.0647C15.5743 306.516 15.0883 306.611 14.6346 306.797C14.1809 306.983 13.7685 307.257 13.421 307.603C13.0735 307.949 12.7978 308.36 12.6097 308.813C12.4215 309.266 12.3247 309.751 12.3247 310.242V310.242Z"
                                      fill="#E6E7E8"/>
                                <path d="M113.352 300.017H89.271V306.518H113.352V300.017Z" fill="#B4A19C"/>
                                <path d="M101.58 305.477C102.8 305.477 103.789 304.488 103.789 303.268C103.789 302.048 102.8 301.059 101.58 301.059C100.36 301.059 99.3706 302.048 99.3706 303.268C99.3706 304.488 100.36 305.477 101.58 305.477Z"
                                      fill="#E6E7E8"/>
                                <path d="M64.606 321.95H164.876" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M64.606 328.198H164.876" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M64.606 335.33H164.876" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M52.2495 321.95H43.444C41.7968 321.95 40.4614 323.285 40.4614 324.932V331.464C40.4614 333.111 41.7968 334.447 43.444 334.447H52.2495C53.8968 334.447 55.2321 333.111 55.2321 331.464V324.932C55.2321 323.285 53.8968 321.95 52.2495 321.95Z"
                                      fill="#D1D3D4"/>
                                <path d="M65.8525 377.838H166.123" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M65.8525 384.086H166.123" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M65.8525 391.218H166.123" stroke="#BCBEC0" stroke-miterlimit="10"/>
                                <path d="M53.4964 377.838H44.6908C43.0436 377.838 41.7083 379.173 41.7083 380.82V387.352C41.7083 389 43.0436 390.335 44.6908 390.335H53.4964C55.1436 390.335 56.4789 389 56.4789 387.352V380.82C56.4789 379.173 55.1436 377.838 53.4964 377.838Z"
                                      fill="#D1D3D4"/>
                                <path d="M104.089 378.658C117.171 378.658 127.776 368.055 127.776 354.974C127.776 341.894 117.171 331.291 104.089 331.291C91.0072 331.291 80.4023 341.894 80.4023 354.974C80.4023 368.055 91.0072 378.658 104.089 378.658Z"
                                      fill="#EC008C"/>
                                <path d="M104.846 339.022L116.492 355.59H107.687L107.782 367.708H102.1V355.495L93.2949 355.685L104.846 339.022Z"
                                      fill="white"/>
                                <rect x="17.4219" y="347.985" width="176.49" height="117.015"/>
                                <path opacity="0.5" d="M107.103 75.3591H97.4138V300.017H107.103V75.3591Z"
                                      fill="#2B3990"/>
                                <path opacity="0.5"
                                      d="M380.755 127.334V207.096C380.75 210.372 379.447 213.512 377.131 215.828C374.815 218.144 371.674 219.447 368.398 219.451H191.813C191.334 219.449 190.859 219.542 190.416 219.724C189.973 219.907 189.57 220.175 189.231 220.514C188.892 220.853 188.624 221.255 188.441 221.698C188.259 222.142 188.166 222.617 188.168 223.096V300.017H178.479V220.303C178.479 217.52 179.584 214.851 181.552 212.883C183.52 210.916 186.19 209.81 188.973 209.81H363.664C364.636 209.81 365.599 209.619 366.497 209.247C367.394 208.875 368.21 208.33 368.898 207.643C369.585 206.955 370.13 206.14 370.502 205.242C370.874 204.344 371.065 203.382 371.065 202.41V127.334H380.755Z"
                                      fill="#2B3990"/>
                                <path opacity="0.5" d="M429.517 348.205H204.833V357.894H429.517V348.205Z"
                                      fill="#2B3990"/>
                                <path d="M568.055 316.553H431.458C430.586 316.553 429.88 317.26 429.88 318.131V387.968C429.88 388.839 430.586 389.546 431.458 389.546H568.055C568.926 389.546 569.633 388.839 569.633 387.968V318.131C569.633 317.26 568.926 316.553 568.055 316.553Z"
                                      stroke="#BCBEC0" stroke-width="6" stroke-miterlimit="10"/>
                                <path d="M446.134 331.101H440.737V378.438H446.134V331.101Z" fill="#80FFA8"/>
                                <path opacity="0.8" d="M456.896 331.101H451.499V378.438H456.896V331.101Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.6" d="M468.527 331.101H463.13V378.438H468.527V331.101Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.4" d="M479.02 331.101H473.624V378.438H479.02V331.101Z" fill="#80FFA8"/>
                                <path opacity="0.2" d="M489.152 331.101H483.755V378.438H489.152V331.101Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.2" d="M499.093 331.101H493.697V378.438H499.093V331.101Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.5"
                                      d="M537.788 377.144C550.146 377.144 560.164 367.126 560.164 354.769C560.164 342.413 550.146 332.395 537.788 332.395C525.429 332.395 515.411 342.413 515.411 354.769C515.411 367.126 525.429 377.144 537.788 377.144Z"
                                      fill="#2B3990"/>
                                <path d="M445.534 54.3418H308.937C308.066 54.3418 307.359 55.0482 307.359 55.9197V125.756C307.359 126.628 308.066 127.334 308.937 127.334H445.534C446.406 127.334 447.112 126.628 447.112 125.756V55.9197C447.112 55.0482 446.406 54.3418 445.534 54.3418Z"
                                      stroke="#BCBEC0" stroke-width="6" stroke-miterlimit="10"/>
                                <path d="M323.613 68.8899H318.216V116.226H323.613V68.8899Z" fill="#80FFA8"/>
                                <path opacity="0.8" d="M334.375 68.8899H328.979V116.226H334.375V68.8899Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.6" d="M346.006 68.8899H340.609V116.226H346.006V68.8899Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.4" d="M356.5 68.8899H351.103V116.226H356.5V68.8899Z" fill="#80FFA8"/>
                                <path opacity="0.2" d="M366.631 68.8899H361.234V116.226H366.631V68.8899Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.2" d="M376.573 68.8899H371.176V116.226H376.573V68.8899Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.5"
                                      d="M415.267 114.932C427.625 114.932 437.644 104.915 437.644 92.5581C437.644 80.2011 427.625 70.1838 415.267 70.1838C402.908 70.1838 392.89 80.2011 392.89 92.5581C392.89 104.915 402.908 114.932 415.267 114.932Z"
                                      fill="#2B3990"/>
                                <path d="M169.736 2.3667H33.1393C32.2678 2.3667 31.5613 3.07314 31.5613 3.94457V73.7813C31.5613 74.6528 32.2678 75.3592 33.1393 75.3592H169.736C170.608 75.3592 171.314 74.6528 171.314 73.7813V3.94457C171.314 3.07314 170.608 2.3667 169.736 2.3667Z"
                                      stroke="#BCBEC0" stroke-width="6" stroke-miterlimit="10"/>
                                <path d="M47.8152 16.9146H42.4182V64.2508H47.8152V16.9146Z" fill="#80FFA8"/>
                                <path opacity="0.8" d="M58.5776 16.9146H53.1807V64.2508H58.5776V16.9146Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.6" d="M70.1921 16.9146H64.7952V64.2508H70.1921V16.9146Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.4" d="M80.6863 16.9146H75.2893V64.2508H80.6863V16.9146Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.2" d="M90.8174 16.9146H85.4204V64.2508H90.8174V16.9146Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.2" d="M100.759 16.9146H95.3623V64.2508H100.759V16.9146Z"
                                      fill="#80FFA8"/>
                                <path opacity="0.5"
                                      d="M139.469 62.9573C151.828 62.9573 161.846 52.94 161.846 40.583C161.846 28.226 151.828 18.2087 139.469 18.2087C127.111 18.2087 117.092 28.226 117.092 40.583C117.092 52.94 127.111 62.9573 139.469 62.9573Z"
                                      fill="#2B3990"/>
                                <path d="M72.1333 148.904C73.2505 147.74 74.5856 146.807 76.0627 146.158H127.507C129.114 146.379 130.594 147.152 131.694 148.343C132.793 149.535 133.445 151.072 133.536 152.691V217.826C133.536 220.508 128.928 223.443 126.466 224.137"
                                      stroke="#888888" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M125.361 148.162H73.9165C70.6744 148.162 68.0461 150.79 68.0461 154.032V219.167C68.0461 222.409 70.6744 225.036 73.9165 225.036H125.361C128.603 225.036 131.232 222.409 131.232 219.167V154.032C131.232 150.79 128.603 148.162 125.361 148.162Z"
                                      fill="#EC008C"/>
                                <g opacity="0.9">
                                    <path opacity="0.9" d="M78.4614 168.927H122.032" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M78.4614 160.217H122.032" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M77.8459 208.311H121.416" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M77.8459 199.601H121.416" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                </g>
                                <path d="M81.7121 179.767H77.8301V177.479H88.4189V179.767H84.5211V189.629H81.7121V179.767Z"
                                      fill="white"/>
                                <path d="M99.3549 187.373V189.629H89.8865V177.479H99.0708V179.736H92.7586V182.434H98.408V184.627H92.7586V187.436L99.3549 187.373Z"
                                      fill="white"/>
                                <path d="M109.107 189.629L106.172 185.416L103.284 189.629H100.128L104.626 183.459L100.349 177.479H103.505L106.298 181.424L109.028 177.479H112.074L107.845 183.349L112.374 189.66L109.107 189.629Z"
                                      fill="white"/>
                                <path d="M115.846 179.767H111.979V177.479H122.568V179.767H118.686V189.629H115.877L115.846 179.767Z"
                                      fill="white"/>
                                <path d="M312.393 246.859C313.811 246.39 315.148 245.704 316.354 244.823C318.043 243.592 319.51 242.015 319.51 240.531V219.451"
                                      stroke="#888888" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M319.479 209.763V175.397C319.387 173.778 318.736 172.241 317.637 171.049C316.537 169.857 315.057 169.085 313.45 168.864H262.006C260.814 169.396 259.712 170.109 258.739 170.979C258.503 171.173 258.282 171.384 258.076 171.61"
                                      stroke="#888888" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M311.288 170.868H259.844C256.601 170.868 253.973 173.496 253.973 176.738V241.873C253.973 245.114 256.601 247.742 259.844 247.742H311.288C314.53 247.742 317.159 245.114 317.159 241.873V176.738C317.159 173.496 314.53 170.868 311.288 170.868Z"
                                      fill="#27AAE1"/>
                                <g opacity="0.9">
                                    <path opacity="0.9"
                                          d="M293.456 170.868V180.225H317.127V176.47C317.067 175.397 316.718 174.362 316.117 173.472C315.582 172.656 314.849 171.988 313.987 171.531C313.142 171.096 312.207 170.869 311.257 170.868H293.456Z"
                                          fill="white"/>
                                    <path opacity="0.9" d="M264.404 191.633H307.975" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M264.404 184.422H307.975" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M263.789 231.017H307.359" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M263.789 222.307H307.359" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9"
                                          d="M302.483 175.902C302.697 176.206 302.808 176.571 302.798 176.943C302.806 177.205 302.748 177.465 302.629 177.7C302.511 177.934 302.336 178.135 302.12 178.284C301.525 178.637 300.837 178.802 300.147 178.758H296.723V172.131H299.879C300.531 172.094 301.18 172.254 301.741 172.588C301.946 172.728 302.112 172.916 302.225 173.137C302.338 173.357 302.394 173.603 302.388 173.85C302.395 174.157 302.313 174.458 302.151 174.718C301.995 174.97 301.771 175.172 301.504 175.302C301.884 175.398 302.225 175.607 302.483 175.902ZM298.19 173.282V174.86H299.769C300.067 174.883 300.365 174.812 300.621 174.655C300.719 174.595 300.8 174.508 300.852 174.405C300.905 174.302 300.929 174.187 300.92 174.071C300.927 173.956 300.903 173.841 300.85 173.739C300.797 173.636 300.718 173.549 300.621 173.488C300.36 173.346 300.065 173.28 299.769 173.298L298.19 173.282ZM300.905 177.401C301.006 177.335 301.087 177.243 301.14 177.135C301.193 177.026 301.215 176.905 301.205 176.785C301.205 176.233 300.794 175.965 299.989 175.965H298.19V177.543H299.989C300.317 177.585 300.651 177.536 300.952 177.401H300.905Z"
                                          fill="#27AAE1"/>
                                    <path opacity="0.9" d="M303.966 172.13H305.544V178.757H303.966V172.13Z"
                                          fill="#27AAE1"/>
                                    <path opacity="0.9"
                                          d="M313.15 172.13V178.757H311.888L308.574 174.734V178.757H306.996V172.13H308.259L311.557 176.154V172.13H313.15Z"
                                          fill="#27AAE1"/>
                                </g>
                                <path d="M266.077 210.946C265.458 210.687 264.915 210.274 264.499 209.747L265.919 208.043C266.134 208.399 266.434 208.696 266.792 208.908C267.15 209.12 267.555 209.24 267.971 209.258C269.012 209.258 269.549 208.658 269.549 207.428V202.173H265.667V200.122H272.089V207.286C272.17 208.399 271.807 209.5 271.079 210.347C270.679 210.706 270.209 210.981 269.699 211.155C269.189 211.328 268.65 211.397 268.113 211.357C267.413 211.366 266.719 211.226 266.077 210.946Z"
                                      fill="white"/>
                                <path d="M281.968 200.611C282.647 200.904 283.228 201.386 283.641 202C284.023 202.645 284.224 203.38 284.224 204.13C284.224 204.879 284.023 205.615 283.641 206.26C283.233 206.878 282.651 207.362 281.968 207.649C281.163 207.98 280.298 208.141 279.427 208.122H277.202V211.167H274.646V200.122H279.38C280.267 200.101 281.149 200.268 281.968 200.611V200.611ZM281.037 205.55C281.226 205.365 281.376 205.144 281.478 204.9C281.581 204.656 281.634 204.394 281.634 204.13C281.634 203.865 281.581 203.604 281.478 203.36C281.376 203.116 281.226 202.895 281.037 202.71C280.528 202.346 279.91 202.168 279.285 202.205H277.202V206.102H279.254C279.895 206.133 280.526 205.938 281.037 205.55V205.55Z"
                                      fill="white"/>
                                <path d="M294.592 209.132V211.167H286.039V200.122H294.387V202.173H288.58V204.524H293.709V206.512H288.58V209.084L294.592 209.132Z"
                                      fill="white"/>
                                <path d="M304.061 205.471H306.396V209.952C305.771 210.423 305.065 210.776 304.313 210.994C303.543 211.238 302.739 211.361 301.93 211.357C300.834 211.387 299.747 211.138 298.774 210.631C297.88 210.164 297.132 209.46 296.612 208.595C296.105 207.697 295.838 206.684 295.838 205.652C295.838 204.621 296.105 203.608 296.612 202.71C297.134 201.841 297.888 201.136 298.79 200.674C299.764 200.168 300.849 199.913 301.946 199.933C302.848 199.926 303.742 200.092 304.582 200.422C305.345 200.735 306.026 201.221 306.57 201.842L304.992 203.42C304.629 203.024 304.187 202.709 303.695 202.495C303.204 202.28 302.672 202.171 302.136 202.173C301.483 202.164 300.838 202.316 300.258 202.615C299.723 202.902 299.28 203.334 298.979 203.862C298.67 204.427 298.512 205.063 298.522 205.708C298.514 206.352 298.672 206.988 298.979 207.554C299.278 208.077 299.715 208.508 300.242 208.8C300.814 209.108 301.455 209.266 302.104 209.258C302.797 209.261 303.48 209.093 304.092 208.769L304.061 205.471Z"
                                      fill="white"/>
                                <path d="M341.65 385.333C343.068 384.865 344.405 384.178 345.611 383.298C347.3 382.067 348.767 380.489 348.767 379.006V357.925"
                                      stroke="#888888" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M348.688 348.237V313.871C348.597 312.252 347.946 310.715 346.846 309.523C345.747 308.332 344.267 307.559 342.66 307.339H291.247C290.055 307.87 288.953 308.584 287.98 309.453C287.744 309.647 287.523 309.858 287.317 310.084"
                                      stroke="#888888" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M340.53 309.343H289.085C285.843 309.343 283.215 311.97 283.215 315.212V380.347C283.215 383.589 285.843 386.217 289.085 386.217H340.53C343.772 386.217 346.4 383.589 346.4 380.347V315.212C346.4 311.97 343.772 309.343 340.53 309.343Z"
                                      fill="#43C26C"/>
                                <g opacity="0.9">
                                    <path opacity="0.9"
                                          d="M322.761 309.343V318.699H346.432V314.976C346.374 313.905 346.031 312.87 345.437 311.978C344.9 311.158 344.161 310.489 343.291 310.037C342.447 309.602 341.511 309.375 340.561 309.374L322.761 309.343Z"
                                          fill="white"/>
                                    <path opacity="0.9" d="M293.646 330.107H337.216" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M293.646 322.896H337.216" stroke="white"
                                          stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path opacity="0.9" d="M293.03 369.491H336.6" stroke="white" stroke-miterlimit="10"
                                          stroke-linecap="round"/>
                                    <path opacity="0.9" d="M293.03 360.781H336.6" stroke="white" stroke-miterlimit="10"
                                          stroke-linecap="round"/>
                                    <path opacity="0.9"
                                          d="M331.724 314.376C331.938 314.68 332.049 315.045 332.04 315.417C332.047 315.68 331.989 315.94 331.87 316.174C331.752 316.408 331.577 316.609 331.361 316.759C330.767 317.113 330.079 317.278 329.389 317.232H325.964V310.605H329.12C329.773 310.561 330.424 310.72 330.982 311.062C331.187 311.202 331.354 311.391 331.467 311.611C331.58 311.832 331.636 312.077 331.629 312.325C331.633 312.626 331.551 312.921 331.393 313.177C331.238 313.434 331.014 313.642 330.746 313.776C331.125 313.872 331.467 314.081 331.724 314.376V314.376ZM327.479 311.82V313.398H329.057C329.36 313.414 329.662 313.343 329.925 313.193C330.014 313.123 330.085 313.035 330.135 312.933C330.184 312.832 330.209 312.721 330.209 312.609C330.209 312.496 330.184 312.385 330.135 312.284C330.085 312.183 330.014 312.094 329.925 312.025C329.66 311.88 329.359 311.814 329.057 311.836L327.479 311.82ZM330.193 315.938C330.292 315.87 330.372 315.778 330.424 315.67C330.477 315.562 330.501 315.442 330.493 315.323C330.493 314.77 330.083 314.502 329.278 314.502H327.479V316.08H329.278C329.596 316.094 329.912 316.023 330.193 315.875V315.938Z"
                                          fill="#43C26C"/>
                                    <path opacity="0.9" d="M333.208 310.605H334.786V317.232H333.208V310.605Z"
                                          fill="#43C26C"/>
                                    <path opacity="0.9"
                                          d="M342.376 310.605V317.232H341.114L337.815 313.208V317.232H336.237V310.605H337.5L340.798 314.629V310.605H342.376Z"
                                          fill="#43C26C"/>
                                </g>
                                <path d="M299.516 350.635C298.739 350.437 298.005 350.095 297.354 349.626L298.301 347.495C298.866 347.907 299.495 348.221 300.163 348.426C300.857 348.649 301.58 348.766 302.309 348.774C302.92 348.814 303.531 348.689 304.077 348.411C304.252 348.323 304.4 348.188 304.503 348.02C304.606 347.853 304.661 347.66 304.66 347.464C304.663 347.327 304.633 347.191 304.572 347.067C304.512 346.944 304.423 346.836 304.313 346.754C304.056 346.543 303.762 346.383 303.445 346.281C303.098 346.17 302.625 346.044 302.009 345.902C301.094 345.681 300.337 345.46 299.737 345.255C299.127 345.039 298.584 344.67 298.159 344.182C297.711 343.638 297.486 342.945 297.528 342.241C297.52 341.562 297.718 340.896 298.096 340.332C298.528 339.715 299.132 339.238 299.832 338.959C300.729 338.601 301.69 338.429 302.656 338.454C303.423 338.453 304.186 338.549 304.929 338.738C305.614 338.904 306.269 339.175 306.87 339.543L306.002 341.673C304.979 341.064 303.815 340.732 302.625 340.711C302.02 340.665 301.415 340.803 300.889 341.105C300.716 341.207 300.572 341.352 300.473 341.527C300.373 341.701 300.321 341.898 300.321 342.099C300.321 342.302 300.383 342.5 300.499 342.666C300.614 342.832 300.778 342.959 300.968 343.03C301.608 343.299 302.274 343.5 302.956 343.63C303.727 343.803 304.486 344.025 305.229 344.292C305.834 344.501 306.377 344.859 306.807 345.334C307.245 345.877 307.47 346.562 307.438 347.259C307.444 347.94 307.24 348.607 306.854 349.168C306.41 349.777 305.803 350.248 305.102 350.525C304.204 350.882 303.244 351.053 302.278 351.03C301.343 351.036 300.412 350.903 299.516 350.635V350.635Z"
                                      fill="white"/>
                                <path d="M321.057 338.644L315.802 350.793H313.024L307.785 338.644H310.815L314.508 347.322L318.263 338.644H321.057Z"
                                      fill="white"/>
                                <path d="M330.146 344.545H332.703V349.484C332.015 349.998 331.24 350.383 330.414 350.62C329.567 350.888 328.684 351.026 327.795 351.03C326.61 351.049 325.438 350.772 324.386 350.225C323.409 349.707 322.591 348.932 322.019 347.985C321.46 346.995 321.167 345.878 321.167 344.742C321.167 343.606 321.46 342.489 322.019 341.5C322.595 340.549 323.426 339.778 324.418 339.275C325.471 338.716 326.65 338.433 327.842 338.454C328.836 338.445 329.821 338.627 330.746 338.991C331.589 339.341 332.339 339.881 332.939 340.569L331.125 342.241C330.727 341.801 330.239 341.451 329.695 341.214C329.151 340.977 328.562 340.859 327.968 340.869C327.249 340.852 326.537 341.021 325.901 341.358C325.31 341.67 324.822 342.147 324.497 342.73C324.165 343.352 323.992 344.046 323.992 344.75C323.992 345.455 324.165 346.148 324.497 346.77C324.822 347.358 325.31 347.84 325.901 348.158C326.526 348.495 327.227 348.664 327.937 348.648C328.7 348.657 329.453 348.478 330.13 348.127L330.146 344.545Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="572" height="465" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <svg class="shape-right" width="324" height="374" viewBox="0 0 324 374" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M122.849 189.266C122.849 93.0643 324 0 324 0V374H0C0 374 122.849 285.467 122.849 189.266Z"
                          fill="#EE3B5C"/>
                </svg>
                <svg class="shape-left" width="149" height="265" viewBox="0 0 149 265" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M83.3926 124.404C31.618 61.6095 0 0 0 0V265H149C149 265 135.167 187.198 83.3926 124.404Z"
                          fill="#EE3B5C"/>
                </svg>
            </section>
        </div>
        <script>
            window.addEventListener('load', function () {
                document.querySelector('.overlay').classList.add('hide');
            });
        </script>
    </body>
</html>