<footer>
    <div id="footer-newsletter">
        <div class="container">
            <p>
                Get our Newsletter:
                <form action="" method="post">
                    <input type="text" class="form-control form-footer-newsletter" placeholder="Your E-Mail adress" />
                    <input type="submit" value="Subscribe" name="subscribe" id="footer-newsletter-subscribe" class="btn btn-success">
                </form>
            </p>
        </div>
    </div>

    <div class="container">
        <p class="footer-links pull-right">
            <a href="{{ url('jobs')  }}">Jobs</a>|
            <a href="{{ url('press')  }}">Press</a>|
            <a href="{{ url('support')  }}">Support</a>|
            <a href="{{ url('sitemap')  }}">Sitemap</a>|
            <a href="{{ url('privacy-policy')  }}">Privacy Policy</a>|
            <a href="{{ url('terms-of-service')  }}">Terms of service</a>|
            <a href="{{ url('imprint')  }}">Imprint</a>
        </p>
    </div>
</footer>