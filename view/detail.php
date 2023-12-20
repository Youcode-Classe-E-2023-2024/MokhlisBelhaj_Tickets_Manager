<?php require_once 'include/header.php'; ?>
<?php require_once 'include/navbar.php'; ?>

<!-- component -->

<div class="w-full h-full flex justify-center items-center">
    <div class="mx-auto  w-full p-4 ">
        <div class="card w-full flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
            <div class="prod-title flex  items-center justify-between">
                <p class="text-2xl uppercase text-gray-900 font-bold"><?php echo ($data['detail']->user_name) ?></p>
                <p class=" text-sm text-gray-400">
                    <?php echo ($data['detail']->ticket_created_at) ?>
                </p>
            </div>

            <div class="prod-info grid gap-10">
                <div>
                    <div class="flex justify-center">
                        <?php foreach ($data['tag'] as $item) : ?>
                            <p class="bg-violet-600 text-xs text-white   font-semibold  tracki uppercase mx-1 px-2">#<?= $item ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="  items-center justify-center text-gray-900">
                    <p class="text-center text-4xl font-semibold  self-start">
                        <?php echo ($data['detail']->ticket_title) ?>
                    </p>
                    <p class=" font-semibold text-xl py-2">
                        <?php echo ($data['detail']->ticket_description) ?>
                    </p>
                </div>
                <div class=" items-center justify-between text-gray-900">
                    <div>
                        <?php foreach ($data['user'] as $item) : ?>
                            <button class="px-6 py-2 my-2 text-white bg-blue-500 transition ease-in duration-200 uppercase rounded-md border-2 border-gray-900 focus:outline-none">
                                <?= $item ?> </button>
                        <?php endforeach; ?>
                    </div>
                    <button class="px-6 py-2 bg-<?php echo ($data['detail']->status_color) ?>-500 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                        <?php echo ($data['detail']->status_title) ?> </button>
                </div>
            </div>
        </div>
        <!-- component -->
        <!-- comment form -->
        <div class="flex flex-col justify-center items-center shadow-lg mt-10 mx-8 mb-4">
            <form id="commentForm" class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <input type="hidden" name="id_ticktet" value="<?= ($data['detail']->ticket_id); ?>">
                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="contenu" placeholder='Type Your Comment' required></textarea>
                        <div class=" ">
                            <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
                        </div>
                    </div>
                </div>
            </form>
            <div id="displaycomment" class="w-full max-w-xl bg-white rounded-lg px-4 mb-3 pt-2">

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        $(document).ready(function() {
            // Submit form via AJAX
            $('#commentForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Get form data
                var formData = $(this).serialize();


                // AJAX request
                $.ajax({
                    type: 'POST',
                    url: '<?= URLROOT ?>dashboard/insertCommentaire',
                    data: formData,
                    success: function(response) {
                        // Handle the success response
                        var data = JSON.parse(response);
                        console.log(data);
                        $('#displaycomment').html('');
                        data.forEach(function(commen) {
                            console.log(commen);



                            var comentaireHtml = `<div class=" w-full flex flex-col items-end justify-between border border-spacing-1">
                    <div class=" w-full flex items-end">
                        <div class="text-3xl px-3 ">${commen.user_name}:</div>
                        <div class="">
                        ${commen.contenu}
                        </div>
                    </div>
                    <div class=" justify-end">
                    ${commen.created_at}
                    </div>
                </div>`


                            $('#displaycomment').append(comentaireHtml);
                        });

                    },
                    error: function(error) {
                        // Handle the error response
                        console.log(error.responseText);
                    }
                });
            });


          

            fetchAllComments()
        });
    
        function fetchAllComments() {
                $.ajax({
                    type: 'POST',
                    url: '<?= URLROOT ?>dashboard/getCommentaire/<?php echo $data['detail']->ticket_id; ?>',
                    success: function(response) {
                        var data = JSON.parse(response);
                        // Handle the success response
                        data.forEach(function(commen) {
                            console.log(commen);



                            var comentaireHtml = `<div class=" w-full flex flex-col items-end justify-between border border-spacing-1">
                    <div class=" w-full flex items-end">
                    <div class="text-3xl px-3 ">${commen.user_name}:</div>
                    <div class="">
                    ${commen.contenu}
                        </div>
                        </div>
                        <div class=" justify-end">
                        ${commen.created_at}
                    </div>
                    </div>`


                            $('#displaycomment').append(comentaireHtml);
                        });

                    },
                    error: function(error) {
                        // Handle the error response
                        console.log(error.responseText);
                    }
                });
            }
    </script>

</div>
</div>