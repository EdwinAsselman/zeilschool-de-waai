<button {{ $attributes->merge([ 
            'type' => 'submit',
            'class' => 
                'bg-gray-700 hover:bg-gray-800 focus:bg-gray-800 active:bg-gray-800 border border-transparent rounded-md font-semibold 
                text-xs text-white hover:text-gray-100 focus:text-gray-100 uppercase tracking-widest focus:outline-none px-4 py-2 
                transition hover:scale-110 hover:shadow-md ease-in-out duration-150 
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 inline-flex items-center'
        ]) }}>
    {{ $slot }}
</button>
