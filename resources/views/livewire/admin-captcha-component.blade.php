<div class="max-w-md mx-auto p-6 bg-white shadow-md rounded">
    <h2 class="text-lg font-semibold mb-4">CAPTCHA Verification</h2>

    <div class="mb-4 text-2xl font-mono text-center bg-gray-100 p-3 rounded select-none">
        {{ $captcha }}
    </div>

    <input type="text" wire:model="input"
           class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300"
           placeholder="Enter CAPTCHA">

    <button wire:click="checkCaptcha"
            class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
        Verify
    </button>

    @if ($result)
        <div class="mt-3 text-center text-sm font-semibold {{ Str::startsWith($result, '✅') ? 'text-green-600' : 'text-red-600' }}">
            {{ $result }}
        </div>
    @endif

    <button wire:click="generateCaptcha" class="mt-2 text-sm text-blue-500 hover:underline">
        Refresh CAPTCHA
    </button>
</div>
