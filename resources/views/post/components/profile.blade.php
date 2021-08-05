<div class="w-full md:w-1/4">
    <div class="w-32 h-32 mx-auto bg-green-400 rounded-full border-2 border-transparent duration-700 hover:border-green-700"></div>
    <div class="text-center mt-3">
        <p class="font-bold text-lg">{{ $user->name }}</p>
        <p class="text-sm mb-3">{{ '@'.$user->username }}</p>
        <a href="#" class="text-green-600 hover:underline hover:text-green-700">{{ $user->email }}</a>
    </div>
</div>