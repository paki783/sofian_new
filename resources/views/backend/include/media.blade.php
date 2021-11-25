@if(!empty($data))
    <h5>Medias</h5>
    <div class="row">
        @foreach($data as $d)
            <div class="col-md-2 form-group">
                <?php
                    $filextension = explode(".", $d->path);
                    $filextension = last($filextension);
                    $fileHTML = '<a href="'.asset('storage/app/public').'/'.$d->path.'" target="_blank">';
                    switch ($filextension){
                        case "docx":
                            $fileHTML.= '<img src="'.asset('public/icons/doc.png').'" style="width:50px; height:50px" />';
                        break;
                        case "doc":
                            $fileHTML.= '<img src="'.asset('public/icons/doc.png').'" style="width:50px; height:50px" />';
                        break;
                        case "pdf":
                            $fileHTML.= '<img src="'.asset('public/icons/pdf.png').'" style="width:50px; height:50px" />';
                        break;
                        default :
                            $fileHTML.= '<img src="'.asset('public/icons/file.png').'" style="width:50px; height:50px" />';
                        break;
                    }
                    $title = explode("/", $d->path);
                    $fileHTML.= "<p>".last($title)."</p>";
                    $fileHTML.= "</a>";
                    echo $fileHTML;
                ?>
                <a href="{{ url('deletefile') }}?id={{ $d->id }}" class="btn-block btn btn-danger">
                    Delete
                </a>
            </div>
        @endforeach
    </div>
@endif