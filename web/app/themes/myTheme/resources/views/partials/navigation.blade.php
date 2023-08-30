@if ($navigation)
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="my-menu navbar-nav">
                @foreach ($navigation as $item)
                    @if ($item->children)
                        <li
                            class="my-menu-item nav-item dropdown {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                            <a href="{{ $item->url }}" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown">
                                {{ $item->label }}
                            </a>

                            <ul class="my-child-menu">
                                @foreach ($item->children as $child)
                                    <li
                                        class="my-child-item  {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                                        <a href="{{ $child->url }}" class="dropdown-item">
                                            {{ $child->label }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                        <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                            <a href="{{ $item->url }}" class="nav-link">
                                {{ $item->label }}
                            </a>
                    @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
@endif
