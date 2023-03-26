<?= $this->include('include/header'); ?>
<div class="container mt-4">
    <div class="row ">
    <div class="col-1" style="position:relative;"><i class="bi bi-arrow-left fs-1" style="    
    position: absolute;
    top: 160px;
    left: -37px;
    z-index: 99;"></i></div>
    <span class="text-center fw-bold mb-3">
        <span>Hello USER ! Welcome to QUIZ</span>
    </span>
   <form method="POSt" action="<?php echo base_url(); ?>home/quizSubmit">
    <div id="carouselExampleSlidesOnly" class="carousel slide col-11 slideafter" data-bs-ride="false">
  <div class="carousel-inner">
    
    <?php
$count = count($questions);
for($i=0;$i<$count;$i++){
        ?>
            <div class="carousel-item">
            <div class="card text-center">
            <div class="card-header mt-2 d-flex flex-wrap">
            <div class="col-3">Qulzzes</div>
            <div class="col-4">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?= 100-((($count-($i+1))/$count)*100);?>%"></div>
                </div>
            </div>
            <div class="col-2 text-center">Question <?= ($i+1)." of ". $count ?></div>
            <div class="col-2" id="timer" style="float:right">
                    <span id="time" class="time"></span>
                </div>
            <div class="col-1 text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
            </div>
            <div class="card-body">
                <div class="row text-center fw-bold mb-5">
                <span>Q. <?=$questions[$i]->question; ?> </span> 
                </div>
                <div class="row mb-4">
                    <?php
                        echo getOptions($options,$questions[$i]->id);
                    ?>
                </div>
                <div class="text-center mb-2">
                    <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
                </div>
            </div>
            <div class="card-footer text-center mb-2">
            <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
            </div>
        </div>
            </div>
        <?php
    }
    ?>
    
  </div>
</div>
    <div class="col-1" style="position:relative;"><i class="bi bi-arrow-right fs-1" style="    
    position: absolute;
    top: 123px;
    left: -5px;
    z-index: 99;"></i></div>
    </div>
</div>
<?= $this->include('include/footer'); ?>

<!-- <hr>         -->
<?php
// var_dump($questions) 
?>
<!-- <hr> -->
<?php
// var_dump($options) 
?>
<!-- <hr style="height:5px"> -->

<?php
$count = count($questions);
for($i=0;$i<$count;$i++)
{

}

function getOptions($options,$qtn_id){
    $option = '';
    foreach($options as $optn){
        if($optn->question_id == $qtn_id){
            $option .= '<div class="col">
            <input class="select_option" data-qnst-id="'.$qtn_id.'" data-option-id="'.$optn->id.'" type="radio" class="btn-check" id="'.$optn->optionName.$qtn_id.'" name="options'.$qtn_id.'" autocomplete="off">
            <label class="btn w-100 btn-outline-primary" for="'.$optn->optionName.$qtn_id.'">'.$optn->optionName."</label>
            </div>";
        }
    }
    return $option;
}
?>
</form>
    
<script>
    $(document).ready(function(){
    var data=[];
    qtn_id, option_id;
    $('input[type=radio]').each(function() {
        data[qtn_id] =  option_id;
    });
    // data[1]='24';
    //     alert(questionID+optionID);
    //     if(questionID==""||optionID==""){
    //         alert("Please select the option");
    //     }
    //     else{
    //         $.ajax({
    //                 url: 'library/database.php',
    //                 type: 'POST',
    //                 data: {data:data},
    //                 datatype: "JSON",
    //                 success: function (data) {
    //                     console.log(data);
    //                     var da = JSON.parse(data);
    //                     show_response(da);
    //                 }
    //             });
    //     }
    // });

    $(".carousel-item").first().addClass('active');
    setInterval(function(){
    $('.slideafter').carousel('next');
  }, 20000);
        
// second countdown
// second countdown
var counter = 20;
var interval = setInterval(function() {
    counter--;
    if (counter <= 0) {
     		// clearInterval(interval);
            counter = 20;
            
    }
    else{
    	$('.time').text(counter);
    }
}, 1000);
// second countdown
// second countdown


    });
</script>
