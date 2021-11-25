@include('frontend.include.head')
<br /><br />
<div class="container">
    ``<div class="qa-main">
        <div class="qa-main-heading">
            <h1>Eine Frage stellen</h1>
        </div>
        <div class="qa-part-form">
            <form enctype="multipart/form-data" name="ask" method="post" action="{{ url('forum/create') }}">
                <table class="qa-form-tall-table">
                    <tbody>
                        <tr>
                            <td class="qa-form-tall-label">
                                Deine Frage in einem Satz:
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-data">
                                <input name="title" id="title" autocomplete="off" onchange="qa_title_change(this.value);" type="text" value="" class="qa-form-tall-text">
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-data">
                                <span id="similar"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-label">
                                Mehr Informationen zu deiner Frage:
                                <textarea id="summernote" name="editordata"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-data">
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-label">
                                Du kannst ein Bild oder eine Datei hochladen:
                            </td>
                        </tr>
                        <tr style="display:none">
                            <td class="qa-form-tall-data">
                                <span class="qa-form-tall-static"><input type="file" name="file" accept="audio/*,video/*,image/*,.doc,.docx,.pdf,.xls,.xlsx,.ppt,.pptx,.odt,.ods,.odp"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-label">
                                Thema - benutze Bindestriche um Wörter zu kombinieren:
                            </td>
                        </tr>
                        <tr style="display:none">
                            <td class="qa-form-tall-data">
                                <input name="tags" id="tags" autocomplete="off" onkeyup="qa_tag_hints();" onmouseup="qa_tag_hints();" type="text" value="" class="qa-form-tall-text">
                                <div class="qa-form-tall-note"><span id="tag_examples_title" style="display:none;">Beispiel-Themen: </span><span id="tag_complete_title" style="display:none;">Gefundene Themen: </span><span id="tag_hints"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="qa-form-tall-label">
                                <label>
                                    <input name="notify" type="checkbox" value="1" checked="" class="qa-form-tall-checkbox">
                                    Ich möchte eine Email (ali.raza@inertiasoft.net) erhalten, wenn jemand meine Frage beantwortet oder kommentiert
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" class="qa-form-tall-buttons">
                                <input value="Eine Frage stellen" title="" type="submit" class="qa-form-tall-button qa-form-tall-button-ask">
                            </td>
                        </tr>
                    </tbody>
                </table>
                @csrf
            </form>
        </div>
    </div>
</div>
<script>
    jQuery("document").ready(function() {
        jQuery('#summernote').summernote({
            height:300,
        });
    });
</script>
@include('frontend.include.footer')