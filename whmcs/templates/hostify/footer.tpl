{if $loginpage eq 0 and $templatefile ne "clientregister"}
                        </div><!-- /.main-content -->
                <div class="col-md-3 pull-md-left sidebar">
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div>
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <div class="email"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Submit a ticket</div> 
                    <div class="email"><i class="fa fa-envelope"></i> Info@rimalite.net</div>
                    <div class="address">
                        <i class="fa fa-map-marker"></i> 
                        <div>Hilversum,<br>
                             The Netherlands.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <h4>Company</h4>
                    <ul class="footer-menu">
                        <li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
                        <li><a href="pp.html">Privacy Policy</a></li>
                        <li><a href="tos.html">Terms Of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Services</h4>
                    <ul class="footer-menu">
                        <li><a href="mcpackage.html">MC Hosting</a></li>
                        <li><a href="mcpe.html">MCPE Hosting</a></li>
                        <li><a href="teamspeak3.html">Ts3 Hosting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Others</h4>
                    <ul class="footer-menu">
                        <li><a href="FAQ.html">FAQ</a></li>
                        <li><a href="portal.html">Payment Methods</a></li>
                        <li><a href="client/register.php">Create Account</a></li>
                        <li><a href="whmcs.html">GamePanel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="copyright" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">Copyright © 2018 Rimalite | All Rights Reserved <br>
										Provided with <i class="fa fa-heart" aria-hidden="true"></i> and care. </div>
            </div>
        </div>
    </div>
</div>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
{/if}
{if $templatefile eq "clientregister"}
<script>
    $(window).on("load", function() {
        $("select").addClass("selectpicker");
    });
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap-select.min.js"></script>
{/if}
<script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap-slider.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/slick.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

{$footeroutput}

</body>
</html>
