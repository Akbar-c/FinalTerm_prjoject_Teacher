
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" 
     
    <div class="panel-body">
        <div class="grade-report">
    <table class="table table-bordered table-compressed">
        <tr>
            <td>Student ID</td>
            <td>:</td>
            <td>15-30043-2</td>
            <td>Core</td>
            <td>:</td>
            <td>BScCSE, Spring 15-16, Core</td>
        </tr>
        <tr>
            <td>Student Name</td>
            <td>:</td>
            <td>AKBAR HOSSAIN CHOWDHURY</td>
            
        </tr>
        <tr>
            <td>Credit(s) Completed</td>
            <td>:</td>
            <td>87</td>
            
        </tr>
        <tr>
            <td>Course(s) Completed</td>
            <td>:</td>
            <td>31</td>
            
        </tr>
        <tr>
            <td>Cgpa</td>
            <td>:</td>
            <td>2.96</td>
            
            
        </tr>
    </table>
    <table class="table table-bordered table-compressed">
       
          
                <tr>
                    <td>01370</td>
                    <td>ENGLISH READING SKILLS &amp; PUBLIC SPEAKING</td>
                    <td>3.00</td>
                    <td>A-</td>
                    <td>A-</td>
                    <td>A-</td>
                    <td>10.50</td>
                    
                </tr>
                
                
                <tr>
                    <td>01516</td>
                    <td>COMPUTER FUNDAMENTALS</td>
                    <td>3.00</td>
                    <td>A+</td>
                    <td>B</td>
                    <td>A</td>
                    <td>11.25</td>
                    
                </tr>
           
                <tr>
                    <td>00076</td>
                    <td>DISCRETE MATHEMATICS</td>
                    <td>3.00</td>
                    <td>A-</td>
                    <td>A-</td>
                    <td>A</td>
                    <td>11.25</td>
                    
                </tr>
                
               
                
                <tr>
                    <td>00052</td>
                    <td>COMPUTER NETWORKS</td>
                    <td>3.00</td>
                    <td>B-</td>
                    <td>A-</td>
                    <td>B+</td>
                    <td>9.75</td>
                    
                </tr>
                <tr>
                    <td>00233</td>
                    <td>THEORY OF COMPUTATION</td>
                    <td>3.00</td>
                    <td>B+</td>
                    <td>A-</td>
                    <td>A-</td>
                    <td>10.50</td>
                    <
                </tr>
                <tr>
                    <td>00361</td>
                    <td>MATRICES, VECTORS, FOURIER ANALYSIS</td>
                    <td>3.00</td>
                    <td>B+</td>
                    <td>B</td>
                    <td>B</td>
                    <td>9.00</td>
                    
                </tr>
                <tr>
                    <td>00501</td>
                    <td>ELECTRICAL CIRCUITS -1 (DC)</td>
                    <td>3.00</td>
                    <td>A+</td>
                    <td>B+</td>
                    <td>A</td>
                    <td>11.25</td>
                    
                </tr>
            
    </table>
</div>
    </div>
</div>



    </div>

</div>

        </div>
        
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.table-details').footable({
                "sorting": {
                    "enabled": true
                }
            });

            var lastScrollTop = 0;

            $(window).scroll(function (event) {
                var st = $(this).scrollTop();
                if (st > lastScrollTop) {
                    if (st > 15) {
                        $(".drawer-menu-link>i").css({ opacity: .33 });
                    }
                } else {
                    if (st < 15) {
                        $(".drawer-menu-link>i").css({ opacity: 1 });
                    }
                }
                lastScrollTop = st;
                //console.log(st);
            });



        });
    </script>

    </div>
</body>
</html>
