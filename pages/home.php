

 <section class="py-5">
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <div class=" card card-body">
                     <form action="action.php" method="POST">
                         <div class="form-group row">
                             <label for="" class="col-md-4 col-form-label">Input world</label>
                             <div class="col-md-8">
                                 <input type="text" name="input_value" class="form-control">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="" class="col-md-4 col-form-label">Selected Type</label>
                             <div class="col-md-8">
                                 <label for=""><input type="radio" name="type" value="word"> Word Count</label>
                                 <label for=""><input type="radio" name="type" value="character"> Character Count</label>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="" class="col-md-4 col-form-label">Result</label>
                             <div class="col-md-8">
                                 <!--                                 <input type="text" readonly value="--><?php //echo isset($result) ? $result: '' ; ?><!--" class="form-control">-->
                                 <textarea class="form-control" readonly cols="30" rows="10"><?php echo "$givenword\n$wordcount\n$charactercount";?>
                                     <?php echo isset($result) ? $result[ 'givenword'] : '' ?>
                                     <?php echo isset($result) ? $result[' word count'] : '' ?>
                                     <?php echo isset($result) ? $result[ 'character count'] : '' ?>
                                 </textarea>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="" class="col-md-4"></label>
                             <div class="col-md-8">
                                 <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Get Result">
                             </div>
                         </div>
                     </form>

                 </div>
             </div>

         </div>

     </div>
 </section>






