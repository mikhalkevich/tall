<div class="p-6 border-t border-gray-200 dark:border-gray-700">
    <form wire:submit.prevent="save">
        <label for="name" class="">
            <span>Name</span>
            <input wire:model="name" id="name" type="text" placeholder="Type name here" class="block w-full border border-gray-300 mt-2 p-2" />
        </label>
        @error('name') Name error @enderror
        <label for="email">
            <span>Email</span>
            <input wire:model="email" id="email" type="email" placeholder="Type email here" class="block w-full border border-gray-300 mt-2 p-2" />
        </label>
        @error('email') Email error @enderror
        <label for="phone">
            <span>Phone</span>
            <input wire:model="phone" id="phone" type="text" placeholder="Type phone here" class="block w-full border border-gray-300 mt-2 p-2" />
        </label>
        @error('phone') Phone error @enderror
        <label for="message">
            <span>Message</span>
            <textarea wire:model="message"  id="message" placeholder="Type message" class="block w-full"></textarea>
        </label>
        @error('message') Message error @enderror
        <button class="px-4 py-2 mt-8 bg-white border border-gray-300">Send us a message</button>
    </form>
</div>
