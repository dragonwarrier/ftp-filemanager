<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $renderer->render('includes/head.php', [
            'title' => 'A flexible FTP web application!',
        ]) ?>
    </head>
    <body>

        <div class="wrapper">
            <header class="header">
                <div class="brand">
                    <h3 class="name">FTP APP</h3>
                </div>
                <nav class="actions">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <button type="button" class="btn-primary btn-svg">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0011 8.5945e-07C4.47548 -0.0022943 0 4.59261 0 10.2639C0 14.7487 2.79969 18.5609 6.69869 19.961C7.22377 20.0964 7.14334 19.7131 7.14334 19.4515V17.6727C4.11127 18.0376 3.98838 15.9766 3.78505 15.6323C3.37392 14.9116 2.40197 14.728 2.69244 14.3837C3.38286 14.0188 4.08669 14.4756 4.90225 15.7126C5.49212 16.6101 6.64283 16.4586 7.22601 16.3094C7.35337 15.77 7.62596 15.288 8.00134 14.9139C4.85979 14.3356 3.55044 12.3663 3.55044 10.0252C3.55044 8.88914 3.91465 7.84485 4.62965 7.00253C4.17384 5.61396 4.6721 4.42506 4.73914 4.24834C6.03731 4.12899 7.38688 5.20312 7.4919 5.28804C8.22925 5.08377 9.07161 4.9759 10.0145 4.9759C10.9619 4.9759 11.8065 5.08836 12.5506 5.29493C12.803 5.09754 14.0543 4.17489 15.2609 4.28735C15.3257 4.46408 15.8128 5.62543 15.3838 6.99564C16.1077 7.84026 16.4764 8.89374 16.4764 10.0321C16.4764 12.3778 15.1581 14.3493 12.0076 14.9185C12.2774 15.1911 12.4917 15.5162 12.6379 15.8748C12.784 16.2334 12.8592 16.6183 12.8589 17.0071V19.5892C12.8768 19.7957 12.8589 20 13.1941 20C17.1512 18.6298 20 14.79 20 10.2662C20 4.59261 15.5223 8.5945e-07 10.0011 8.5945e-07V8.5945e-07Z" fill="white"/>
                                    </svg>
                                    github
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <button type="button" class="btn-secondary">
                                    features
                                </button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>

        <?= $renderer->render('includes/scripts.html') ?>
    </body>
</html>