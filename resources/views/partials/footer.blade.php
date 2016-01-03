<footer>
    <div id="footer-newsletter">
        <div class="container">
            <p>
                {{ Lang::get('footer.newsletter_text') }}:
                <form action="" method="post">
                    <input type="text" class="form-control form-footer-newsletter" placeholder="{{ Lang::get('footer.newsletter_email_placeholder') }}" />
                    <input type="submit" value="{{ Lang::get('footer.newsletter_submit_text') }}" name="subscribe" id="footer-newsletter-subscribe" class="btn btn-success">
                </form>
            </p>
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