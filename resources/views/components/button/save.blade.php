<button {{ $attributes->merge([ 
            'type' => 'submit',
            'class' => 
                'bg-lime-600 hover:bg-lime-700 focus:bg-lime-700 active:bg-lime-700 border border-transparent rounded-md font-semibold 
                text-xs text-white hover:text-gray-100 focus:text-gray-100 uppercase tracking-widest focus:outline-none px-4 py-2 
                transition hover:scale-110 hover:shadow-md shadow-lime-500/50 ease-in-out duration-150 
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 inline-flex items-center'
        ]) }}>
    {{ $slot }}
</button>
