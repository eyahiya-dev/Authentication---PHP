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

				<form method="POST" action="./signUp.php">
					<h2 class="text-2xl font-bold text-center">Sign Up</h2>					
					<hr class="my-6">                      
					<label class="uppercase text-sm font-bold opacity-70">User Name</label>
					<input type="text" placeholder="type your name" required  name="userName"  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
					<label class="uppercase text-sm font-bold opacity-70">Email</label>
					<input type="email" placeholder="enter your Email"  required name="email"  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
					<label class="uppercase text-sm font-bold opacity-70">Password</label>
					<input type="password" placeholder="type a strong password" required  name="password"  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">					
                    <div class="flex justify-between">
                    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Sign UP">                    
                    </div>					
				</form>

			</div>
		</div>
	</div>
    </section>
</body>
</html>