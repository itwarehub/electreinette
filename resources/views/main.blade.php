     @extends('parent')
          @section('body')
               @include('template-parts/header')
               
               
               <div class="container-fluid">
               @include('template-parts/hero')
               @include('template-parts/wake_bear')
               @include('template-parts/images-box')
               @include('template-parts/save_ca')
               @include('template-parts/message')
               @include('template-parts/contract_ca')    
               
               
               
               @include('template-parts/footer')
               
               </div>
          @endsection
