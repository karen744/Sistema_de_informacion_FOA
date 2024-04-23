<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="register">
            @csrf

            <div class="form__field">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="form__field mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="form__field mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="form__field mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form__field mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>


<style>
$base-bgcolor: #354152;
$base-color: #7e8ba3;
$base-font-weight: 300;
$base-font-size: 1rem;
$base-line-height: 1.5;
$base-font-family: Helvetica Neue;
$base-font-family-fallback: sans-serif;

* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: $base-bgcolor;
  color: $base-color;
  font: $base-font-weight #{$base-font-size}/#{$base-line-height} $base-font-family, $base-font-family-fallback;
  margin: 0;
  min-height: 100%;
}

.align {
  align-items: center;
  display: flex;
  flex-direction: row;

  &__item {

    &--start {
      align-self: flex-start;
    }

    &--end {
      align-self: flex-end;
    }

  }

}

.site {

  &__main {
  }

  &__logo {
    margin-bottom: 2rem;
  }

}

$input-placeholder-color: #7e8ba3;

input {
  border: 0;
  font: inherit;

  &::placeholder {
    color: $input-placeholder-color;
  }

}

.form {

  &__field {
    margin-bottom: 1rem;
  }

  input {
    outline: 0;
    padding: .5rem 1rem;

    &[type="email"],
    &[type="password"] {
      width: 100%;
    }

  }

}

$grid-max-width: 25rem;
$grid-width: 100%;

.grid {
  margin: 0 auto;
  max-width: $grid-max-width;
  width: $grid-width;
}

h2 {
  font-size: 2.75rem;
  font-weight: 100;
  margin: 0 0 1rem;
  text-transform: uppercase;
}

svg {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

$link-color: #7e8ba3;

a {
  color: $link-color
}

.register {
  box-shadow: 0 0 250px #000;
  text-align: center;
  padding: 4rem 2rem;

  input {
    border: 1px solid #242c37;
    border-radius: 999px;
    background-color: transparent;
    text-align: center;

    &[type="email"],
    &[type="password"] {
      background-repeat: no-repeat;
      background-size: 1.5rem;
      background-position: 1rem 50%;
    }

    &[type="email"] {
      background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#242c37"><path d="M256.017 273.436l-205.17-170.029h410.904l-205.734 170.029zm-.034 55.462l-205.983-170.654v250.349h412v-249.94l-206.017 170.245z"/></svg>');
    }

    &[type="password"] {
      background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#242c37"><path d="M195.334 223.333h-50v-62.666c0-61.022 49.645-110.667 110.666-110.667 61.022 0 110.667 49.645 110.667 110.667v62.666h-50v-62.666c0-33.452-27.215-60.667-60.667-60.667-33.451 0-60.666 27.215-60.666 60.667v62.666zm208.666 30v208.667h-296v-208.667h296zm-121 87.667c0-14.912-12.088-27-27-27s-27 12.088-27 27c0 7.811 3.317 14.844 8.619 19.773 4.385 4.075 6.881 9.8 6.881 15.785v22.942h23v-22.941c0-5.989 2.494-11.708 6.881-15.785 5.302-4.93 8.619-11.963 8.619-19.774z"/></svg>');
    }

    &[type="submit"] {
      background-image: linear-gradient(160deg, #8ceabb 0%, #378f7b 100%);
      color: #fff;
      margin-bottom: 6rem;
      width: 100%;
    }

  }

}

</style>
