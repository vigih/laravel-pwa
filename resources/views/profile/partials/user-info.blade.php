
<div class="flex justify-between items-center p-3 m-3" style="background-image: url('{{ asset('images/bg-user-info.png') }}');background-repeat: no-repeat;background-size: cover;">
    <div class="user-info-group">
        <div class="capitalize text-white font-bold">{{ $user->name }}</div>
        <div class="text-white text-sm">{{ $user->email }}</div>
    </div>
    <div class="user-info-group relative">
        <img class="w-[50px] h-[50px] rounded-full shadow-sm" src="{{ url('/images/user-default.png') }}" />
        <div class="absolute bottom-[-16px] right-0 rounded-full bg-yellow-500 flex justify-center z-10">
            <span class="material-icons-outlined text-white">upload</span>
        </div>
    </div>
</div>

