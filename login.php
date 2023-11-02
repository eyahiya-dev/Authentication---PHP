<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Authentication - PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section>
    <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
		<div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
			<div class='max-w-md mx-auto space-y-6'>

				<form method="POST" action="./loginPost.php">
					<h2 class="text-2xl font-bold text-center">Sign In</h2>					
					<hr class="my-6">
                    <?php
                    if(isset($_SESSION['signUpMessage'])){                        
                    }
                    ?>
                    <h5 class="mb-5 text-center text-green-500">
                        <?= $_SESSION['signUpMessage'];?>
                    </h5>
                    <?php
                    ?>
					<label class="uppercase text-sm font-bold opacity-70">Email</label>
					<input type="email" placeholder="enter your Email" required name="email"  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
					<label class="uppercase text-sm font-bold opacity-70">Password</label>
					<input type="password" placeholder="type a strong password" required name="password"  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">					
                    <div class="flex justify-between">
                    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Sign In">                    
                    </div>					
				</form>

			</div>
		</div>
	</div>
    </section>
</body>
</html>