<footer>
    <div id="footer-newsletter">
        <div class="container">
            <div class="pull-left">
                {{ Lang::get('footer.newsletter_text') }}:
                <form action="" method="post">
                    <input type="text" class="form-control form-footer-newsletter" placeholder="{{ Lang::get('footer.newsletter_email_placeholder') }}" />
                    <input type="submit" value="{{ Lang::get('footer.newsletter_submit_text') }}" name="subscribe" id="footer-newsletter-subscribe" class="btn btn-success">
                </form>
            </div>

            <div class="pull-right">
                <div id="footer-shraing">
                    <!-- Twitter -->
                    <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                    <!-- LinkedIn -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <p class="pull-left">
            © COPYRIGHT 2016 Company Inc.
        </p>

        <p class="footer-links pull-right">
            <a href="{{ url('jobs')  }}">{{ Lang::get('footer.jobs') }}</a>|
            <a href="{{ url('press')  }}">{{ Lang::get('footer.press') }}</a>|
            <a href="{{ url('support')  }}">{{ Lang::get('footer.support') }}</a>|
            <a href="{{ url('sitemap')  }}">{{ Lang::get('footer.sitemap') }}</a>|
            <a href="{{ url('privacy-policy')  }}">{{ Lang::get('footer.privacy_policy') }}</a>|
            <a href="{{ url('terms-of-service')  }}">{{ Lang::get('footer.terms_of_service') }}</a>|
            <a href="{{ url('imprint')  }}">{{ Lang::get('footer.imprint') }}</a>
        </p>
    </div>
</footer>