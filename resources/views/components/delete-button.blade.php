<form action="{{ $url }}"
      method="POST"
      class="inline-block"
      onsubmit="return confirm('Delete this item?')">

    @csrf
    @method('DELETE')

    <button type="submit"
            class="{{ $label ? 'inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-red-500 border border-red-500 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 transition' : 'p-1.5 rounded-md text-gray-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/30 transition' }}"
            title="Delete">

        <svg xmlns="http://www.w3.org/2000/svg"
             class="h-4 w-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M10 3h4a1 1 0 011 1v2H9V4a1 1 0 011-1z" />
        </svg>
        
        @if($label)
            <span>{{ $label }}</span>
        @endif
    </button>
</form>