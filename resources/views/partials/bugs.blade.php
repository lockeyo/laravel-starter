<div class="feedback right">
    <div class="tooltips">
        <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bug fa-2x" title="Report Bug"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form" id="feedback-form">
                <li>
                    <div class="report">
                        <h3 class="text-center">Melde einen Fehler</h3>
                        <form class="doo" method="post" action="{{ url('bug/submit-report') }}">
                            <div class="col-sm-12">
                                <textarea required name="comment" class="form-control" placeholder="Bitte teile  uns den Fehler oder das Problem mit, welches du auf unserer Seite gefunden hast. Klicke auf das Foto-Icon, um ein Foto der Seite zu machen. Das hilft uns den Fehler schneller zu beheben." id="feedback-comment"></textarea>
                                <input name="screenshot" type="hidden" class="screen-uri" id="feedback-screenshot" />
                                <span class="screenshot pull-right"><i class="fa fa-camera cam" title="Take Screenshot"></i></span>
                            </div>
                            <div class="col-sm-12 clearfix">
                                <button class="btn btn-primary btn-block">Meldung senden</button>
                            </div>
                        </form>
                    </div>
                    <div class="loading text-center hideme">
                        <h2>Bitte warte kurz ...</h2>
                        <h2><i class="fa fa-refresh fa-spin"></i></h2>
                    </div>
                    <div class="reported text-center hideme">
                        <h2>Vielen Dank!</h2>
                        <p>Deine Meldung ist bei uns angekommen. Wir werden uns den Fehler anschauen und Ihn schnellstmöglich beheben. Vielen Dank, dass du hilfst unsere Seite zu verbessern!</p>
                        <div class="col-sm-12 clearfix">
                            <button class="btn btn-success btn-block do-close">Schließen</button>
                        </div>
                    </div>
                    <div class="failed text-center hideme">
                        <h2>Oh nein!</h2>
                        <p>Leider gibt es aktuell einen Verbindungsproblem mit unseren Server. Bitte sende deine Nachricht per Email an uns.</p>
                        <p><br><br><a href="mailto:marcel.engelmann@yahoo.de">Jetzt eine E-Mail an uns schreiben.</a></p>
                        <div class="col-sm-12 clearfix">
                            <button class="btn btn-danger btn-block do-close">Schließen</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>