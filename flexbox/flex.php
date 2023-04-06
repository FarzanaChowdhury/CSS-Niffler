        <?php
        include("../login-registration/config.php");
        // include("../main.php");
        include("levels.php");
        include("../header.php");
        ?>
        
<html>
    <head>
       <link rel="Stylesheet" href="flex.css">
       <link rel="Stylesheet" href="../main.css">
       <style>
       ._form{
            display: none;
        }
</style>
    </head>
       
    <body>
    <div class="fullBody">
        <section id="view">
            <div id="board">
                <div id="treasure-container">
                    <div class="treasure">
                        <div class="bg animated pulse infinite"></div>
                    </div>
                    <div class="treasure">
                        <div class="bg animated pulse infinite"></div>
                    </div>
                    <div class="treasure">
                        <div class="bg animated pulse infinite"></div>
                    </div>

                </div>
                <div id="niffler-container">
                    <div class="niffler">
                        <div class="bg" style="transform: scale(0.89);"></div>
                    </div>
                    <div class="niffler">
                        <div class="bg" style="transform: scale(0.89);"></div>
                    </div>
                    <div class="niffler">
                        <div class="bg" style="transform: scale(0.89);"></div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>



<?php
function flexLevel1()
{
    $uid=$_SESSION['uid'];
    
    echo '<section id="level">

        <div id="codingArea">

    <div class="information">
        <p>Help th nifflers reach to the chests using your flexbox knowledge!</p>
        <p>Here are some guides for your help:</p>
        <p>The property <span class="keyword">justify-content</span> aligns items horizontally, using the attributes: </p>
        <p><span class="keyword">flex-start</span>: Items align to the left side of the container.</p>
        <p><span class="keyword">flex-end</span>: Items align to the right side of the container.</p>
        <p><span class="keyword">center</span>: Items align at the center of the container.</p>
        <p><span class="keyword">space-between</span>: Items display with equal spacing between them.</p>
        <p><span class="keyword">space-around</span>: Items display with equal spacing around them.</p>
    </div>

        <div class="box">
            <div class="line">
                <p class="a">1</p>
                <p class="a">2</p>
                <p class="a">3</p>
                <p class="a">4</p>
                <p class="a">5</p>
                <p class="a">6</p>
                <p class="a">7</p>
            </div>

            <div class="inputArea">
            <p class="a"><label>.niffler{</label></p>

            <p class="a"><label> display:
                    <input type="text" name="in_1" id="in_1">
                </label></p>
            <p class="a"><label>
                    justify-content: <input type="text" name="in_2" id="in_2"></label></p>

            <p class="a"><label>}</label></p>

            <button id="nextLevel1" style="display: none">Next</button>
                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="2" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>
                </div>


            </div>

            </div>
</div>
</section>
</div>
        
  ';
}

function flexLevel2()
{
    echo '<section id="level">
        <div id="codingArea">
           
        <div class="information">
        <p>The property <span class="keyword">align-items</span> aligns items horizontally, using the attributes: </p>
        <p><span class="keyword">flex-start</span>: Items align to the top of the container.</p>
        <p><span class="keyword">flex-end</span>: Items align to the bottom of the container.</p>
        <p><span class="keyword">center</span>: Items align at the vertical center of the container.</p>
        <p><span class="keyword">baseline</span>:  Items display at the baseline of the container.</p>
        <p><span class="keyword">stretch</span>: Items are stretched to fit the container.</p>


        Also set the value for <abbr title="Flex-start,flex-end, center, space-between, space-around"><span class="keyword">justify-content</span></abbr>

        </div>

        <div class="box">
        <div class="line">
            <p class="a">1</p>
            <p class="a">2</p>
            <p class="a">3</p>
            <p class="a">4</p>
            <p class="a">5</p>
            <p class="a">6</p>
            <p class="a">7</p>
        </div>

        <div class="inputArea">
        <p class="a"><label>.niffler{</label></p>
            <p class="a"><label>display: flex;</label></p>
            <p class="a"><label> justify-content:
                    <input type="text" name="in_1" id="in_1">
                </label></p>
                <p class="a"><label>
                    align-items: <input type="text" name="in_2" id="in_2"></label></p>

                    <p class="a"><label>}</label></p>
                
                    <button id="nextLevel2" style="display: none">Next</button>
                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="1" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>

                </div>
                </div>
                </div>
</div>
</section>
</div>
              
  ';
}

function flexLevel3()
{
    echo '<section id="level">
        <div id="codingArea">

        <div class="information">
        <p>The property <span class="keyword">flex-direction</span> defines the direction items are placed in the container, and accepts the following values: </p>
        <p><span class="keyword">row</span>: Items are placed the same as the text direction.</p>
        <p><span class="keyword">row-reverse</span>:: Items are placed opposite to the text direction.</p>
        <p><span class="keyword">column</span>: Items are placed top to bottom.</p>
        <p><span class="keyword">column-reverse</span>:   Items are placed bottom to top.</p>


        </div>

        <div class="box">
        <div class="line">
            <p class="a">1</p>
            <p class="a">2</p>
            <p class="a">3</p>
            <p class="a">4</p>
            <p class="a">5</p>
            <p class="a">6</p>
            <p class="a">7</p>
        </div>

        <div class="inputArea">
        <p class="a"><label>.niffler{</label></p>
            <p class="a"><label>display: flex;</label></p>
            <p class="a"><label>justify-content:
            <input type="text" name="in_1" id="in_1">
            </label></p>
            <p class="a"><label>flex-direction:
            <input type="text" name="in_2" id="in_2">
            </label></p>

                    <p class="a"><label>}</label></p>

                    <button id="nextLevel3" style="display: none">Next</button>

                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="1" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>
                </div>

                </div>
                </div>
</div>
</section>
</div>
               
   ';
}
?>


<?php
if(isset($_GET['level1']))
{
    flexLevel1();
      echo '<script id="currentLevel" src="flex-positioning.js" lvl="1">
      </script>';

}

elseif(isset($_GET['level2']))
{
    flexLevel2();
    echo '<script id="currentLevel" src="flex-positioning.js" lvl="2">
    </script>';
}
elseif(isset($_GET['level3']))
{
    flexLevel3();
    echo '<script id="currentLevel" src="flex-positioning.js" lvl="3">
    </script>';
}


?>
<?php
echo '
</body></html>';
?>