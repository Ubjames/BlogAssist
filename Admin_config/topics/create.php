
<div class="topicForm">


    <form action="" method="post" id="postForm">
        <h2 style="animation: fadeInUp 0.5s ease-in 0ms forwards; visibility:hidden;">Add Topic</h2>
        <div >
            <input type="text" name="title" id="title" placeholder="Enter title here" class="magicbox" style="animation: fadeInUp 0.5s ease-in 0.1ms forwards; visibility:hidden;">
        </div>
        <div style="animation: fadeInUp 0.5s ease-in 0.2ms forwards; visibility:hidden;">
            <textarea class="topicDescr" name="descr" id="content" class="magicbox"> Add a description </textarea>
        </div>
        <div class="action-button" style="animation: fadeInUp 0.5s ease-in 0.3ms forwards; visibility:hidden;">
        <button disabled class="topicBtn inactiveButton" onclick="addTopic()" type="button" >Add</button>
        </div>
    </form>
    </div>





    <?php
  include "../lib/footer.php"
  ?>