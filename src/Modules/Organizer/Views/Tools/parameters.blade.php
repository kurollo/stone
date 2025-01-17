<span class="dropdown mr-4 d-none">
    <a
        href=""
        class="dropdown-toggle"
        data-toggle="dropdown"
        aria-expanded="false"
        data-offset="0,15"
    >
        <i class="fe fe-settings font-size-21"></i>
    </a>
    <span class="dropdown-menu dropdown-menu-right" role="menu" style="
    box-shadow: 0 4px 38px 0 rgba(20, 19, 34, 0.11), 0 0 21px 0 rgba(20, 19, 34, 0.05);
    width: 185px;
    ">
        @if($btnParameters)
            <a class="dropdown-item" href="{{ route(app('urlBack').'.super.module.parametres',[$idModule, $modulesName]) }}">
                <i class="dropdown-icon fe fe-settings"></i> {{ trans('Organizer::Organizer/Organizer.parameters')  }}
            </a>
        @endif

        @if($btnEnable)
            @if($statusModule == 1)
                 <a class="dropdown-item" href="{{ route(app('urlBack').'.super.module.status',[$idModule, $modulesName]) }}"
                       class="statutsModule"><i
                            class="dropdown-icon fe fe-minus-circle"></i> {{ trans('Organizer::Organizer/Organizer.disabled')  }}
                </a>
            @else
                <a class="dropdown-item" href="{{ route(app('urlBack').'.super.module.status',[$idModule, $modulesName]) }}"
                       class="statutsModule"><i
                            class="dropdown-icon fe fe-eye"></i> {{ trans('Organizer::Organizer/Organizer.enable')  }}
                </a>
            @endif
        @endif

        @if($btnReset)
            <a class="dropdown-item" href="{{ route(app('urlBack').'.super.module.reset',$modulesName) }}">
                <i class="dropdown-icon fe fe-refresh-cw"></i>
                {{ trans('Organizer::Organizer/Organizer.reset')  }}
            </a>
        @endif

        @if($btnUninstall)
            <a class="dropdown-item" href="{{ route(app('urlBack').'.super.module.uninstall',$modulesName) }}">
                <i class="dropdown-icon fe fe-trash-2"></i> {{ trans('Organizer::Organizer/Organizer.uninstall')  }}
            </a>
        @endif

        <a class="dropdown-item" class="disabled">
            <i class="dropdown-icon fe fe-x"></i> {{ trans('Organizer::Organizer/Organizer.remove')  }}
        </a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#{{$modulesName}}"><i
                  class="dropdown-icon fe fe-globe"></i> {{ trans('Organizer::Organizer/Organizer.about') }}
        </a>
    </span>
</span>

<div id="{{$modulesName}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <strong class="modal-title"
                        id="myModalLabel">{{ trans('Organizer::Organizer/Organizer.about') }}</strong>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <strong><h5>{{ trans('Organizer::Organizer/Organizer.name_modules') }}</h5></strong>
                <h6>{!! StoneEngine::getAttributes($modulesName, 'name') !!}</h6>

                <strong><h5>{{ trans('Organizer::Organizer/Organizer.description_modules') }}</h5>
                </strong>
                <h6>{!! StoneEngine::getAttributes($modulesName, 'description') !!}</h6>

                <strong><h5>{{ trans('Organizer::Organizer/Organizer.author_modules') }}</h5></strong>
                <h6>{!! StoneEngine::getAttributes($modulesName, 'author') !!}</h6>

            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">{{ trans('Organizer::Organizer/Organizer.close') }}</button>
            </div>

        </div>
    </div>
</div>
