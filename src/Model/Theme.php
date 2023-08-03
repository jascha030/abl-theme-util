<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Model;

use Jascha030\LiveTheme\Model\Theme\ColorNotation;
use Jascha030\LiveTheme\Model\Value\FormatTrait;
use Symfony\Component\Serializer\Annotation\SerializedName;
use function lcfirst;
use function str_replace;
use function str_starts_with;
use function ucfirst;

class Theme
{
    use FormatTrait;

    #[SerializedName('ControlForeground')]
    private Value|ColorValue|null $controlForeground = null;

    #[SerializedName('TextDisabled')]
    private Value|ColorValue|null $textDisabled = null;

    #[SerializedName('ControlDisabled')]
    private Value|ColorValue|null $controlDisabled = null;

    #[SerializedName('MeterBackground')]
    private Value|ColorValue|null $meterBackground = null;

    #[SerializedName('SurfaceHighlight')]
    private Value|ColorValue|null $surfaceHighlight = null;

    #[SerializedName('SurfaceArea')]
    private Value|ColorValue|null $surfaceArea = null;

    #[SerializedName('SurfaceAreaForeground')]
    private Value|ColorValue|null $surfaceAreaForeground = null;

    #[SerializedName('Desktop')]
    private Value|ColorValue|null $desktop = null;

    #[SerializedName('ViewCheckControlEnabledOn')]
    private Value|ColorValue|null $viewCheckControlEnabledOn = null;

    #[SerializedName('ScrollbarInnerHandle')]
    private Value|ColorValue|null $scrollbarInnerHandle = null;

    #[SerializedName('ScrollbarInnerTrack')]
    private Value|ColorValue|null $scrollbarInnerTrack = null;

    #[SerializedName('ScrollbarOuterHandle')]
    private Value|ColorValue|null $scrollbarOuterHandle = null;

    #[SerializedName('ScrollbarOuterTrack')]
    private Value|ColorValue|null $scrollbarOuterTrack = null;

    #[SerializedName('ScrollbarLCDHandle')]
    private Value|ColorValue|null $scrollbarLcdHandle = null;

    #[SerializedName('ScrollbarLCDTrack')]
    private Value|ColorValue|null $scrollbarLcdTrack = null;

    #[SerializedName('DetailViewBackground')]
    private Value|ColorValue|null $detailViewBackground = null;

    #[SerializedName('PreferencesTab')]
    private Value|ColorValue|null $preferencesTab = null;

    #[SerializedName('SelectionFrame')]
    private Value|ColorValue|null $selectionFrame = null;

    #[SerializedName('ControlBackground')]
    private Value|ColorValue|null $controlBackground = null;

    #[SerializedName('ControlFillHandle')]
    private Value|ColorValue|null $controlFillHandle = null;

    #[SerializedName('ChosenDefault')]
    private Value|ColorValue|null $chosenDefault = null;

    #[SerializedName('ChosenRecord')]
    private Value|ColorValue|null $chosenRecord = null;

    #[SerializedName('ChosenPreListen')]
    private Value|ColorValue|null $chosenPreListen = null;

    #[SerializedName('ImplicitArm')]
    private Value|ColorValue|null $implicitArm = null;

    #[SerializedName('RangeDefault')]
    private Value|ColorValue|null $rangeDefault = null;

    #[SerializedName('RangeDisabled')]
    private Value|ColorValue|null $rangeDisabled = null;

    #[SerializedName('RangeDisabledOff')]
    private Value|ColorValue|null $rangeDisabledOff = null;

    #[SerializedName('LearnMidi')]
    private Value|ColorValue|null $learnMidi = null;

    #[SerializedName('LearnKey')]
    private Value|ColorValue|null $learnKey = null;

    #[SerializedName('LearnMacro')]
    private Value|ColorValue|null $learnMacro = null;

    #[SerializedName('RangeEditField')]
    private Value|ColorValue|null $rangeEditField = null;

    #[SerializedName('RangeEditField2')]
    private Value|ColorValue|null $rangeEditField2 = null;

    #[SerializedName('BipolReset')]
    private Value|ColorValue|null $bipolReset = null;

    #[SerializedName('ChosenAlternative')]
    private Value|ColorValue|null $chosenAlternative = null;

    #[SerializedName('ChosenAlert')]
    private Value|ColorValue|null $chosenAlert = null;

    #[SerializedName('ChosenPlay')]
    private Value|ColorValue|null $chosenPlay = null;

    #[SerializedName('Clip1')]
    private Value|ColorValue|null $clip1 = null;

    #[SerializedName('Clip2')]
    private Value|ColorValue|null $clip2 = null;

    #[SerializedName('Clip3')]
    private Value|ColorValue|null $clip3 = null;

    #[SerializedName('Clip4')]
    private Value|ColorValue|null $clip4 = null;

    #[SerializedName('Clip5')]
    private Value|ColorValue|null $clip5 = null;

    #[SerializedName('Clip6')]
    private Value|ColorValue|null $clip6 = null;

    #[SerializedName('Clip7')]
    private Value|ColorValue|null $clip7 = null;

    #[SerializedName('Clip8')]
    private Value|ColorValue|null $clip8 = null;

    #[SerializedName('Clip9')]
    private Value|ColorValue|null $clip9 = null;

    #[SerializedName('Clip10')]
    private Value|ColorValue|null $clip10 = null;

    #[SerializedName('Clip11')]
    private Value|ColorValue|null $clip11 = null;

    #[SerializedName('Clip12')]
    private Value|ColorValue|null $clip12 = null;

    #[SerializedName('Clip13')]
    private Value|ColorValue|null $clip13 = null;

    #[SerializedName('Clip14')]
    private Value|ColorValue|null $clip14 = null;

    #[SerializedName('Clip15')]
    private Value|ColorValue|null $clip15 = null;

    #[SerializedName('Clip16')]
    private Value|ColorValue|null $clip16 = null;

    #[SerializedName('ClipText')]
    private Value|ColorValue|null $clipText = null;

    #[SerializedName('ClipBorder')]
    private Value|ColorValue|null $clipBorder = null;

    #[SerializedName('SceneContrast')]
    private Value|ColorValue|null $sceneContrast = null;

    #[SerializedName('SelectionBackground')]
    private Value|ColorValue|null $selectionBackground = null;

    #[SerializedName('StandbySelectionBackground')]
    private Value|ColorValue|null $standbySelectionBackground = null;

    #[SerializedName('SelectionForeground')]
    private Value|ColorValue|null $selectionForeground = null;

    #[SerializedName('StandbySelectionForeground')]
    private Value|ColorValue|null $standbySelectionForeground = null;

    #[SerializedName('SelectionBackgroundContrast')]
    private Value|ColorValue|null $selectionBackgroundContrast = null;

    #[SerializedName('SurfaceBackground')]
    private Value|ColorValue|null $surfaceBackground = null;

    #[SerializedName('TakeLaneTrackHighlighted')]
    private Value|ColorValue|null $takeLaneTrackHighlighted = null;

    #[SerializedName('TakeLaneTrackNotHighlighted')]
    private Value|ColorValue|null $takeLaneTrackNotHighlighted = null;

    #[SerializedName('AutomationColor')]
    private Value|ColorValue|null $automationColor = null;

    #[SerializedName('AutomationGrid')]
    private Value|ColorValue|null $automationGrid = null;

    #[SerializedName('LoopColor')]
    private Value|ColorValue|null $loopColor = null;

    #[SerializedName('OffGridLoopColor')]
    private Value|ColorValue|null $offGridLoopColor = null;

    #[SerializedName('ArrangementRulerMarkings')]
    private Value|ColorValue|null $arrangementRulerMarkings = null;

    #[SerializedName('DetailViewRulerMarkings')]
    private Value|ColorValue|null $detailViewRulerMarkings = null;

    #[SerializedName('ShadowDark')]
    private Value|ColorValue|null $shadowDark = null;

    #[SerializedName('ShadowLight')]
    private Value|ColorValue|null $shadowLight = null;

    #[SerializedName('DisplayBackground')]
    private Value|ColorValue|null $displayBackground = null;

    #[SerializedName('AbletonColor')]
    private Value|ColorValue|null $abletonColor = null;

    #[SerializedName('WaveformColor')]
    private Value|ColorValue|null $waveformColor = null;

    #[SerializedName('DimmedWaveformColor')]
    private Value|ColorValue|null $dimmedWaveformColor = null;

    #[SerializedName('VelocityColor')]
    private Value|ColorValue|null $velocityColor = null;

    #[SerializedName('VelocitySelectedOrHovered')]
    private Value|ColorValue|null $velocitySelectedOrHovered = null;

    #[SerializedName('NoteProbability')]
    private Value|ColorValue|null $noteProbability = null;

    #[SerializedName('Alert')]
    private Value|ColorValue|null $alert = null;

    #[SerializedName('ControlOnForeground')]
    private Value|ColorValue|null $controlOnForeground = null;

    #[SerializedName('ControlOffForeground')]
    private Value|ColorValue|null $controlOffForeground = null;

    #[SerializedName('ControlOnDisabledForeground')]
    private Value|ColorValue|null $controlOnDisabledForeground = null;

    #[SerializedName('ControlOffDisabledForeground')]
    private Value|ColorValue|null $controlOffDisabledForeground = null;

    #[SerializedName('ControlOnAlternativeForeground')]
    private Value|ColorValue|null $controlOnAlternativeForeground = null;

    #[SerializedName('ControlTextBack')]
    private Value|ColorValue|null $controlTextBack = null;

    #[SerializedName('ControlContrastFrame')]
    private Value|ColorValue|null $controlContrastFrame = null;

    #[SerializedName('ControlSelectionFrame')]
    private Value|ColorValue|null $controlSelectionFrame = null;

    #[SerializedName('ControlContrastTransport')]
    private Value|ColorValue|null $controlContrastTransport = null;

    #[SerializedName('Progress')]
    private Value|ColorValue|null $progress = null;

    #[SerializedName('ProgressText')]
    private Value|ColorValue|null $progressText = null;

    #[SerializedName('TransportProgress')]
    private Value|ColorValue|null $transportProgress = null;

    #[SerializedName('ClipSlotButton')]
    private Value|ColorValue|null $clipSlotButton = null;

    #[SerializedName('BrowserBar')]
    private Value|ColorValue|null $browserBar = null;

    #[SerializedName('BrowserBarOverlayHintTextColor')]
    private Value|ColorValue|null $browserBarOverlayHintTextColor = null;

    #[SerializedName('BrowserDisabledItem')]
    private Value|ColorValue|null $browserDisabledItem = null;

    #[SerializedName('BrowserSampleWaveform')]
    private Value|ColorValue|null $browserSampleWaveform = null;

    #[SerializedName('AutomationDisabled')]
    private Value|ColorValue|null $automationDisabled = null;

    #[SerializedName('AutomationMouseOver')]
    private Value|ColorValue|null $automationMouseOver = null;

    #[SerializedName('MidiNoteMaxVelocity')]
    private Value|ColorValue|null $midiNoteMaxVelocity = null;

    #[SerializedName('RetroDisplayBackground')]
    private Value|ColorValue|null $retroDisplayBackground = null;

    #[SerializedName('RetroDisplayBackgroundLine')]
    private Value|ColorValue|null $retroDisplayBackgroundLine = null;

    #[SerializedName('RetroDisplayForeground')]
    private Value|ColorValue|null $retroDisplayForeground = null;

    #[SerializedName('RetroDisplayForeground2')]
    private Value|ColorValue|null $retroDisplayForeground2 = null;

    #[SerializedName('RetroDisplayForegroundDisabled')]
    private Value|ColorValue|null $retroDisplayForegroundDisabled = null;

    #[SerializedName('RetroDisplayGreen')]
    private Value|ColorValue|null $retroDisplayGreen = null;

    #[SerializedName('RetroDisplayRed')]
    private Value|ColorValue|null $retroDisplayRed = null;

    #[SerializedName('RetroDisplayHandle1')]
    private Value|ColorValue|null $retroDisplayHandle1 = null;

    #[SerializedName('RetroDisplayHandle2')]
    private Value|ColorValue|null $retroDisplayHandle2 = null;

    #[SerializedName('RetroDisplayScaleText')]
    private Value|ColorValue|null $retroDisplayScaleText = null;

    #[SerializedName('RetroDisplayTitle')]
    private Value|ColorValue|null $retroDisplayTitle = null;

    #[SerializedName('ThresholdLineColor')]
    private Value|ColorValue|null $thresholdLineColor = null;

    #[SerializedName('GainReductionLineColor')]
    private Value|ColorValue|null $gainReductionLineColor = null;

    #[SerializedName('InputCurveColor')]
    private Value|ColorValue|null $inputCurveColor = null;

    #[SerializedName('InputCurveOutlineColor')]
    private Value|ColorValue|null $inputCurveOutlineColor = null;

    #[SerializedName('OutputCurveColor')]
    private Value|ColorValue|null $outputCurveColor = null;

    #[SerializedName('OutputCurveOutlineColor')]
    private Value|ColorValue|null $outputCurveOutlineColor = null;

    #[SerializedName('SpectrumDefaultColor')]
    private Value|ColorValue|null $spectrumDefaultColor = null;

    #[SerializedName('SpectrumAlternativeColor')]
    private Value|ColorValue|null $spectrumAlternativeColor = null;

    #[SerializedName('SpectrumGridLines')]
    private Value|ColorValue|null $spectrumGridLines = null;

    #[SerializedName('Operator1')]
    private Value|ColorValue|null $operator1 = null;

    #[SerializedName('Operator2')]
    private Value|ColorValue|null $operator2 = null;

    #[SerializedName('Operator3')]
    private Value|ColorValue|null $operator3 = null;

    #[SerializedName('Operator4')]
    private Value|ColorValue|null $operator4 = null;

    #[SerializedName('DrumRackScroller1')]
    private Value|ColorValue|null $drumRackScroller1 = null;

    #[SerializedName('DrumRackScroller2')]
    private Value|ColorValue|null $drumRackScroller2 = null;

    #[SerializedName('FilledDrumRackPad')]
    private Value|ColorValue|null $filledDrumRackPad = null;

    #[SerializedName('SurfaceAreaFocus')]
    private Value|ColorValue|null $surfaceAreaFocus = null;

    #[SerializedName('FreezeColor')]
    private Value|ColorValue|null $freezeColor = null;

    #[SerializedName('GridLabel')]
    private Value|ColorValue|null $gridLabel = null;

    #[SerializedName('GridLineBase')]
    private Value|ColorValue|null $gridLineBase = null;

    #[SerializedName('ArrangerGridTiles')]
    private Value|ColorValue|null $arrangerGridTiles = null;

    #[SerializedName('DetailGridTiles')]
    private Value|ColorValue|null $detailGridTiles = null;

    #[SerializedName('GridGuideline')]
    private Value|ColorValue|null $gridGuideline = null;

    #[SerializedName('OffGridGuideline')]
    private Value|ColorValue|null $offGridGuideline = null;

    #[SerializedName('TreeColumnHeadBackground')]
    private Value|ColorValue|null $treeColumnHeadBackground = null;

    #[SerializedName('TreeColumnHeadForeground')]
    private Value|ColorValue|null $treeColumnHeadForeground = null;

    #[SerializedName('TreeColumnHeadSelected')]
    private Value|ColorValue|null $treeColumnHeadSelected = null;

    #[SerializedName('TreeColumnHeadFocus')]
    private Value|ColorValue|null $treeColumnHeadFocus = null;

    #[SerializedName('TreeColumnHeadControl')]
    private Value|ColorValue|null $treeColumnHeadControl = null;

    #[SerializedName('TreeRowCategoryForeground')]
    private Value|ColorValue|null $treeRowCategoryForeground = null;

    #[SerializedName('TreeRowCategoryBackground')]
    private Value|ColorValue|null $treeRowCategoryBackground = null;

    #[SerializedName('SearchIndication')]
    private Value|ColorValue|null $searchIndication = null;

    #[SerializedName('SearchIndicationStandby')]
    private Value|ColorValue|null $searchIndicationStandby = null;

    #[SerializedName('KeyZoneBackground')]
    private Value|ColorValue|null $keyZoneBackground = null;

    #[SerializedName('KeyZoneCrossfadeRamp')]
    private Value|ColorValue|null $keyZoneCrossfadeRamp = null;

    #[SerializedName('VelocityZoneBackground')]
    private Value|ColorValue|null $velocityZoneBackground = null;

    #[SerializedName('VelocityZoneCrossfadeRamp')]
    private Value|ColorValue|null $velocityZoneCrossfadeRamp = null;

    #[SerializedName('SelectorZoneBackground')]
    private Value|ColorValue|null $selectorZoneBackground = null;

    #[SerializedName('SelectorZoneCrossfadeRamp')]
    private Value|ColorValue|null $selectorZoneCrossfadeRamp = null;

    #[SerializedName('ViewCheckControlEnabledOff')]
    private Value|ColorValue|null $viewCheckControlEnabledOff = null;

    #[SerializedName('ViewCheckControlDisabledOn')]
    private Value|ColorValue|null $viewCheckControlDisabledOn = null;

    #[SerializedName('ViewCheckControlDisabledOff')]
    private Value|ColorValue|null $viewCheckControlDisabledOff = null;

    #[SerializedName('DefaultBlendFactor')]
    private Value|ColorValue|null $defaultBlendFactor = null;

    #[SerializedName('IconBlendFactor')]
    private Value|ColorValue|null $iconBlendFactor = null;

    #[SerializedName('ClipBlendFactor')]
    private Value|ColorValue|null $clipBlendFactor = null;

    #[SerializedName('NoteBorderStandbyBlendFactor')]
    private Value|ColorValue|null $noteBorderStandbyBlendFactor = null;

    #[SerializedName('RetroDisplayBlendFactor')]
    private Value|ColorValue|null $retroDisplayBlendFactor = null;

    #[SerializedName('CheckControlNotCheckedBlendFactor')]
    private Value|ColorValue|null $checkControlNotCheckedBlendFactor = null;

    #[SerializedName('MixSurfaceAreaBlendFactor')]
    private Value|ColorValue|null $mixSurfaceAreaBlendFactor = null;

    #[SerializedName('TextFrameSegmentBlendFactor')]
    private Value|ColorValue|null $textFrameSegmentBlendFactor = null;

    #[SerializedName('NoteDisabledSelectedBlendFactor')]
    private Value|ColorValue|null $noteDisabledSelectedBlendFactor = null;

    #[SerializedName('BackgroundClip')]
    private Value|ColorValue|null $backgroundClip = null;

    #[SerializedName('BackgroundClipFrame')]
    private Value|ColorValue|null $backgroundClipFrame = null;

    #[SerializedName('WarperTimeBarRulerBackground')]
    private Value|ColorValue|null $warperTimeBarRulerBackground = null;

    #[SerializedName('WarperTimeBarMarkerBackground')]
    private Value|ColorValue|null $warperTimeBarMarkerBackground = null;

    #[SerializedName('MinVelocityNoteBlendFactor')]
    private Value|ColorValue|null $minVelocityNoteBlendFactor = null;

    #[SerializedName('StripedBackgroundShadeFactor')]
    private Value|ColorValue|null $stripedBackgroundShadeFactor = null;

    #[SerializedName('NonEditableAutomationAlpha')]
    private Value|ColorValue|null $nonEditableAutomationAlpha = null;

    #[SerializedName('DisabledContextMenuIconAlpha')]
    private Value|ColorValue|null $disabledContextMenuIconAlpha = null;

    #[SerializedName('ClipBorderAlpha')]
    private Value|ColorValue|null $clipBorderAlpha = null;

    #[SerializedName('ScrollBarAlpha')]
    private Value|ColorValue|null $scrollBarAlpha = null;

    #[SerializedName('ScrollBarOnHoverAlpha')]
    private Value|ColorValue|null $scrollBarOnHoverAlpha = null;

    #[SerializedName('ScrollBarBackgroundAlpha')]
    private Value|ColorValue|null $scrollBarBackgroundAlpha = null;

    #[SerializedName('InaudibleTakeLightness')]
    private Value|ColorValue|null $inaudibleTakeLightness = null;

    #[SerializedName('InaudibleTakeSaturation')]
    private Value|ColorValue|null $inaudibleTakeSaturation = null;

    #[SerializedName('InaudibleTakeNameLightness')]
    private Value|ColorValue|null $inaudibleTakeNameLightness = null;

    #[SerializedName('InaudibleTakeNameSaturation')]
    private Value|ColorValue|null $inaudibleTakeNameSaturation = null;

    #[SerializedName('AutomationLaneClipBodyLightness')]
    private Value|ColorValue|null $automationLaneClipBodyLightness = null;

    #[SerializedName('AutomationLaneClipBodySaturation')]
    private Value|ColorValue|null $automationLaneClipBodySaturation = null;

    #[SerializedName('AutomationLaneHeaderLightness')]
    private Value|ColorValue|null $automationLaneHeaderLightness = null;

    #[SerializedName('AutomationLaneHeaderSaturation')]
    private Value|ColorValue|null $automationLaneHeaderSaturation = null;

    #[SerializedName('TakeLaneHeaderLightness')]
    private Value|ColorValue|null $takeLaneHeaderLightness = null;

    #[SerializedName('TakeLaneHeaderSaturation')]
    private Value|ColorValue|null $takeLaneHeaderSaturation = null;

    #[SerializedName('TakeLaneHeaderNameLightness')]
    private Value|ColorValue|null $takeLaneHeaderNameLightness = null;

    #[SerializedName('TakeLaneHeaderNameSaturation')]
    private Value|ColorValue|null $takeLaneHeaderNameSaturation = null;

    #[SerializedName('AutomationLaneHeaderNameLightness')]
    private Value|ColorValue|null $automationLaneHeaderNameLightness = null;

    #[SerializedName('AutomationLaneHeaderNameSaturation')]
    private Value|ColorValue|null $automationLaneHeaderNameSaturation = null;

    #[SerializedName('ClipContrastColorAdjustment')]
    private Value|ColorValue|null $clipContrastColorAdjustment = null;

    #[SerializedName('BipolarPotiTriangle')]
    private Value|ColorValue|null $bipolarPotiTriangle = null;

    #[SerializedName('Poti')]
    private Value|ColorValue|null $poti = null;

    #[SerializedName('DeactivatedPoti')]
    private Value|ColorValue|null $deactivatedPoti = null;

    #[SerializedName('PotiNeedle')]
    private Value|ColorValue|null $potiNeedle = null;

    #[SerializedName('DeactivatedPotiNeedle')]
    private Value|ColorValue|null $deactivatedPotiNeedle = null;

    #[SerializedName('TransportOffBackground')]
    private Value|ColorValue|null $transportOffBackground = null;

    #[SerializedName('TransportOffDisabledForeground')]
    private Value|ColorValue|null $transportOffDisabledForeground = null;

    #[SerializedName('TransportSelectionBackground')]
    private Value|ColorValue|null $transportSelectionBackground = null;

    #[SerializedName('Modulation')]
    private Value|ColorValue|null $modulation = null;

    #[SerializedName('ModulationDisabled')]
    private Value|ColorValue|null $modulationDisabled = null;

    #[SerializedName('ModulationMouseOver')]
    private Value|ColorValue|null $modulationMouseOver = null;

    #[SerializedName('AutomationTransformToolFrame')]
    private Value|ColorValue|null $automationTransformToolFrame = null;

    #[SerializedName('AutomationTransformToolFrameActive')]
    private Value|ColorValue|null $automationTransformToolFrameActive = null;

    #[SerializedName('AutomationTransformToolHandle')]
    private Value|ColorValue|null $automationTransformToolHandle = null;

    #[SerializedName('AutomationTransformToolHandleActive')]
    private Value|ColorValue|null $automationTransformToolHandleActive = null;

    #[SerializedName('MutedAuditionClip')]
    private Value|ColorValue|null $mutedAuditionClip = null;

    #[SerializedName('LinkedTrackHover')]
    private Value|ColorValue|null $linkedTrackHover = null;

    #[SerializedName('ExpressionLaneHeaderHighlight')]
    private Value|ColorValue|null $expressionLaneHeaderHighlight = null;

    #[SerializedName('ZoomPanHandle')]
    private Value|ColorValue|null $zoomPanHandle = null;

    #[SerializedName('StandardVuMeter')]
    private Value|ColorValue|null $standardVuMeter = null;

    #[SerializedName('OverloadVuMeter')]
    private Value|ColorValue|null $overloadVuMeter = null;

    #[SerializedName('DisabledVuMeter')]
    private Value|ColorValue|null $disabledVuMeter = null;

    #[SerializedName('HeadphonesVuMeter')]
    private Value|ColorValue|null $headphonesVuMeter = null;

    #[SerializedName('SendsOnlyVuMeter')]
    private Value|ColorValue|null $sendsOnlyVuMeter = null;

    #[SerializedName('BipolarGainReductionVuMeter')]
    private Value|ColorValue|null $bipolarGainReductionVuMeter = null;

    #[SerializedName('OrangeVuMeter')]
    private Value|ColorValue|null $orangeVuMeter = null;

    public function getControlForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlForeground);
    }

    public function setControlForeground(ColorValue|null $controlForeground): self
    {
        $this->controlForeground = $controlForeground;

        return $this;
    }

    public function getTextDisabled(): Value|ColorValue|null
    {
        return $this->format($this->textDisabled);
    }

    public function setTextDisabled(ColorValue|null $textDisabled): self
    {
        $this->textDisabled = $textDisabled;

        return $this;
    }

    public function getControlDisabled(): Value|ColorValue|null
    {
        return $this->format($this->controlDisabled);
    }

    public function setControlDisabled(ColorValue|null $controlDisabled): self
    {
        $this->controlDisabled = $controlDisabled;

        return $this;
    }

    public function getMeterBackground(): Value|ColorValue|null
    {
        return $this->format($this->meterBackground);
    }

    public function setMeterBackground(ColorValue|null $meterBackground): self
    {
        $this->meterBackground = $meterBackground;

        return $this;
    }

    public function getSurfaceHighlight(): Value|ColorValue|null
    {
        return $this->format($this->surfaceHighlight);
    }

    public function setSurfaceHighlight(ColorValue|null $surfaceHighlight): self
    {
        $this->surfaceHighlight = $surfaceHighlight;

        return $this;
    }

    public function getSurfaceArea(): Value|ColorValue|null
    {
        return $this->format($this->surfaceArea);
    }

    public function setSurfaceArea(ColorValue|null $surfaceArea): self
    {
        $this->surfaceArea = $surfaceArea;

        return $this;
    }

    public function getSurfaceAreaForeground(): Value|ColorValue|null
    {
        if (null === $this->surfaceAreaForeground && null !== $this->getControlForeground()) {
            return $this->format($this->controlForeground);
        }

        return $this->format($this->surfaceAreaForeground);
    }

    public function setSurfaceAreaForeground(ColorValue|null $surfaceAreaForeground): self
    {
        $this->surfaceAreaForeground = $surfaceAreaForeground;

        return $this;
    }

    public function getDesktop(): Value|ColorValue|null
    {
        return $this->format($this->desktop);
    }

    public function setDesktop(ColorValue|null $desktop): self
    {
        $this->desktop = $desktop;

        return $this;
    }

    public function getViewCheckControlEnabledOn(): Value|ColorValue|null
    {
        return $this->format($this->viewCheckControlEnabledOn);
    }

    public function setViewCheckControlEnabledOn(ColorValue|null $viewCheckControlEnabledOn): self
    {
        $this->viewCheckControlEnabledOn = $viewCheckControlEnabledOn;

        return $this;
    }

    public function getScrollbarInnerHandle(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarInnerHandle);
    }

    public function setScrollbarInnerHandle(ColorValue|null $scrollbarInnerHandle): self
    {
        $this->scrollbarInnerHandle = $scrollbarInnerHandle;

        return $this;
    }

    public function getScrollbarInnerTrack(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarInnerTrack);
    }

    public function setScrollbarInnerTrack(ColorValue|null $scrollbarInnerTrack): self
    {
        $this->scrollbarInnerTrack = $scrollbarInnerTrack;

        return $this;
    }

    public function getScrollbarOuterHandle(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarOuterHandle);
    }

    public function setScrollbarOuterHandle(ColorValue|null $scrollbarOuterHandle): self
    {
        $this->scrollbarOuterHandle = $scrollbarOuterHandle;

        return $this;
    }

    public function getScrollbarOuterTrack(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarOuterTrack);
    }

    public function setScrollbarOuterTrack(ColorValue|null $scrollbarOuterTrack): self
    {
        $this->scrollbarOuterTrack = $scrollbarOuterTrack;

        return $this;
    }

    public function getScrollbarLcdHandle(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarLcdHandle);
    }

    public function setScrollbarLcdHandle(ColorValue|null $scrollbarLcdHandle): self
    {
        $this->scrollbarLcdHandle = $scrollbarLcdHandle;

        return $this;
    }

    public function getScrollbarLcdTrack(): Value|ColorValue|null
    {
        return $this->format($this->scrollbarLcdTrack);
    }

    public function setScrollbarLcdTrack(ColorValue|null $scrollbarLcdTrack): self
    {
        $this->scrollbarLcdTrack = $scrollbarLcdTrack;

        return $this;
    }

    public function getDetailViewBackground(): Value|ColorValue|null
    {
        return $this->format($this->detailViewBackground);
    }

    public function setDetailViewBackground(ColorValue|null $detailViewBackground): self
    {
        $this->detailViewBackground = $detailViewBackground;

        return $this;
    }

    public function getPreferencesTab(): Value|ColorValue|null
    {
        return $this->format($this->preferencesTab);
    }

    public function setPreferencesTab(ColorValue|null $preferencesTab): self
    {
        $this->preferencesTab = $preferencesTab;

        return $this;
    }

    public function getSelectionFrame(): Value|ColorValue|null
    {
        return $this->format($this->selectionFrame);
    }

    public function setSelectionFrame(ColorValue|null $selectionFrame): self
    {
        $this->selectionFrame = $selectionFrame;

        return $this;
    }

    public function getControlBackground(): Value|ColorValue|null
    {
        return $this->format($this->controlBackground);
    }

    public function setControlBackground(ColorValue|null $controlBackground): self
    {
        $this->controlBackground = $controlBackground;

        return $this;
    }

    public function getControlFillHandle(): Value|ColorValue|null
    {
        return $this->format($this->controlFillHandle);
    }

    public function setControlFillHandle(ColorValue|null $controlFillHandle): self
    {
        $this->controlFillHandle = $controlFillHandle;

        return $this;
    }

    public function getChosenDefault(): Value|ColorValue|null
    {
        return $this->format($this->chosenDefault);
    }

    public function setChosenDefault(ColorValue|null $chosenDefault): self
    {
        $this->chosenDefault = $chosenDefault;

        return $this;
    }

    public function getChosenRecord(): Value|ColorValue|null
    {
        return $this->format($this->chosenRecord);
    }

    public function setChosenRecord(ColorValue|null $chosenRecord): self
    {
        $this->chosenRecord = $chosenRecord;

        return $this;
    }

    public function getChosenPreListen(): Value|ColorValue|null
    {
        return $this->format($this->chosenPreListen);
    }

    public function setChosenPreListen(ColorValue|null $chosenPreListen): self
    {
        $this->chosenPreListen = $chosenPreListen;

        return $this;
    }

    public function getImplicitArm(): Value|ColorValue|null
    {
        return $this->format($this->implicitArm);
    }

    public function setImplicitArm(ColorValue|null $implicitArm): self
    {
        $this->implicitArm = $implicitArm;

        return $this;
    }

    public function getRangeDefault(): Value|ColorValue|null
    {
        return $this->format($this->rangeDefault);
    }

    public function setRangeDefault(ColorValue|null $rangeDefault): self
    {
        $this->rangeDefault = $rangeDefault;

        return $this;
    }

    public function getRangeDisabled(): Value|ColorValue|null
    {
        return $this->format($this->rangeDisabled);
    }

    public function setRangeDisabled(ColorValue|null $rangeDisabled): self
    {
        $this->rangeDisabled = $rangeDisabled;

        return $this;
    }

    public function getRangeDisabledOff(): Value|ColorValue|null
    {
        return $this->format($this->rangeDisabledOff);
    }

    public function setRangeDisabledOff(ColorValue|null $rangeDisabledOff): self
    {
        $this->rangeDisabledOff = $rangeDisabledOff;

        return $this;
    }

    public function getLearnMidi(): Value|ColorValue|null
    {
        return $this->format($this->learnMidi);
    }

    public function setLearnMidi(ColorValue|null $learnMidi): self
    {
        $this->learnMidi = $learnMidi;

        return $this;
    }

    public function getLearnKey(): Value|ColorValue|null
    {
        return $this->format($this->learnKey);
    }

    public function setLearnKey(ColorValue|null $learnKey): self
    {
        $this->learnKey = $learnKey;

        return $this;
    }

    public function getLearnMacro(): Value|ColorValue|null
    {
        return $this->format($this->learnMacro);
    }

    public function setLearnMacro(ColorValue|null $learnMacro): self
    {
        $this->learnMacro = $learnMacro;

        return $this;
    }

    public function getRangeEditField(): Value|ColorValue|null
    {
        return $this->format($this->rangeEditField);
    }

    public function setRangeEditField(ColorValue|null $rangeEditField): self
    {
        $this->rangeEditField = $rangeEditField;

        return $this;
    }

    public function getRangeEditField2(): Value|ColorValue|null
    {
        return $this->format($this->rangeEditField2);
    }

    public function setRangeEditField2(ColorValue|null $rangeEditField2): self
    {
        $this->rangeEditField2 = $rangeEditField2;

        return $this;
    }

    public function getBipolReset(): Value|ColorValue|null
    {
        return $this->format($this->bipolReset);
    }

    public function setBipolReset(ColorValue|null $bipolReset): self
    {
        $this->bipolReset = $bipolReset;

        return $this;
    }

    public function getChosenAlternative(): Value|ColorValue|null
    {
        return $this->format($this->chosenAlternative);
    }

    public function setChosenAlternative(ColorValue|null $chosenAlternative): self
    {
        $this->chosenAlternative = $chosenAlternative;

        return $this;
    }

    public function getChosenAlert(): Value|ColorValue|null
    {
        return $this->format($this->chosenAlert);
    }

    public function setChosenAlert(ColorValue|null $chosenAlert): self
    {
        $this->chosenAlert = $chosenAlert;

        return $this;
    }

    public function getChosenPlay(): Value|ColorValue|null
    {
        return $this->format($this->chosenPlay);
    }

    public function setChosenPlay(ColorValue|null $chosenPlay): self
    {
        $this->chosenPlay = $chosenPlay;

        return $this;
    }

    public function getClip1(): Value|ColorValue|null
    {
        return $this->format($this->clip1);
    }

    public function setClip1(ColorValue|null $clip1): self
    {
        $this->clip1 = $clip1;

        return $this;
    }

    public function getClip2(): Value|ColorValue|null
    {
        return $this->format($this->clip2);
    }

    public function setClip2(ColorValue|null $clip2): self
    {
        $this->clip2 = $clip2;

        return $this;
    }

    public function getClip3(): Value|ColorValue|null
    {
        return $this->format($this->clip3);
    }

    public function setClip3(ColorValue|null $clip3): self
    {
        $this->clip3 = $clip3;

        return $this;
    }

    public function getClip4(): Value|ColorValue|null
    {
        return $this->format($this->clip4);
    }

    public function setClip4(ColorValue|null $clip4): self
    {
        $this->clip4 = $clip4;

        return $this;
    }

    public function getClip5(): Value|ColorValue|null
    {
        return $this->format($this->clip5);
    }

    public function setClip5(ColorValue|null $clip5): self
    {
        $this->clip5 = $clip5;

        return $this;
    }

    public function getClip6(): Value|ColorValue|null
    {
        return $this->format($this->clip6);
    }

    public function setClip6(ColorValue|null $clip6): self
    {
        $this->clip6 = $clip6;

        return $this;
    }

    public function getClip7(): Value|ColorValue|null
    {
        return $this->format($this->clip7);
    }

    public function setClip7(ColorValue|null $clip7): self
    {
        $this->clip7 = $clip7;

        return $this;
    }

    public function getClip8(): Value|ColorValue|null
    {
        return $this->format($this->clip8);
    }

    public function setClip8(ColorValue|null $clip8): self
    {
        $this->clip8 = $clip8;

        return $this;
    }

    public function getClip9(): Value|ColorValue|null
    {
        return $this->format($this->clip9);
    }

    public function setClip9(ColorValue|null $clip9): self
    {
        $this->clip9 = $clip9;

        return $this;
    }

    public function getClip10(): Value|ColorValue|null
    {
        return $this->format($this->clip10);
    }

    public function setClip10(ColorValue|null $clip10): self
    {
        $this->clip10 = $clip10;

        return $this;
    }

    public function getClip11(): Value|ColorValue|null
    {
        return $this->format($this->clip11);
    }

    public function setClip11(ColorValue|null $clip11): self
    {
        $this->clip11 = $clip11;

        return $this;
    }

    public function getClip12(): Value|ColorValue|null
    {
        return $this->format($this->clip12);
    }

    public function setClip12(ColorValue|null $clip12): self
    {
        $this->clip12 = $clip12;

        return $this;
    }

    public function getClip13(): Value|ColorValue|null
    {
        return $this->format($this->clip13);
    }

    public function setClip13(ColorValue|null $clip13): self
    {
        $this->clip13 = $clip13;

        return $this;
    }

    public function getClip14(): Value|ColorValue|null
    {
        return $this->format($this->clip14);
    }

    public function setClip14(ColorValue|null $clip14): self
    {
        $this->clip14 = $clip14;

        return $this;
    }

    public function getClip15(): Value|ColorValue|null
    {
        return $this->format($this->clip15);
    }

    public function setClip15(ColorValue|null $clip15): self
    {
        $this->clip15 = $clip15;

        return $this;
    }

    public function getClip16(): Value|ColorValue|null
    {
        return $this->format($this->clip16);
    }

    public function setClip16(ColorValue|null $clip16): self
    {
        $this->clip16 = $clip16;

        return $this;
    }

    public function getClipText(): Value|ColorValue|null
    {
        return $this->format($this->clipText);
    }

    public function setClipText(ColorValue|null $clipText): self
    {
        $this->clipText = $clipText;

        return $this;
    }

    public function getClipBorder(): Value|ColorValue|null
    {
        return $this->format($this->clipBorder);
    }

    public function setClipBorder(ColorValue|null $clipBorder): self
    {
        $this->clipBorder = $clipBorder;

        return $this;
    }

    public function getSceneContrast(): Value|ColorValue|null
    {
        return $this->format($this->sceneContrast);
    }

    public function setSceneContrast(ColorValue|null $sceneContrast): self
    {
        $this->sceneContrast = $sceneContrast;

        return $this;
    }

    public function getSelectionBackground(): Value|ColorValue|null
    {
        return $this->format($this->selectionBackground);
    }

    public function setSelectionBackground(ColorValue|null $selectionBackground): self
    {
        $this->selectionBackground = $selectionBackground;

        return $this;
    }

    public function getStandbySelectionBackground(): Value|ColorValue|null
    {
        return $this->format($this->standbySelectionBackground);
    }

    public function setStandbySelectionBackground(ColorValue|null $standbySelectionBackground): self
    {
        $this->standbySelectionBackground = $standbySelectionBackground;

        return $this;
    }

    public function getSelectionForeground(): Value|ColorValue|null
    {
        return $this->format($this->selectionForeground);
    }

    public function setSelectionForeground(ColorValue|null $selectionForeground): self
    {
        $this->selectionForeground = $selectionForeground;

        return $this;
    }

    public function getStandbySelectionForeground(): Value|ColorValue|null
    {
        return $this->format($this->standbySelectionForeground);
    }

    public function setStandbySelectionForeground(ColorValue|null $standbySelectionForeground): self
    {
        $this->standbySelectionForeground = $standbySelectionForeground;

        return $this;
    }

    public function getSelectionBackgroundContrast(): Value|ColorValue|null
    {
        return $this->format($this->selectionBackgroundContrast);
    }

    public function setSelectionBackgroundContrast(ColorValue|null $selectionBackgroundContrast): self
    {
        $this->selectionBackgroundContrast = $selectionBackgroundContrast;

        return $this;
    }

    public function getSurfaceBackground(): Value|ColorValue|null
    {
        return $this->format($this->surfaceBackground);
    }

    public function setSurfaceBackground(ColorValue|null $surfaceBackground): self
    {
        $this->surfaceBackground = $surfaceBackground;

        return $this;
    }

    public function getTakeLaneTrackHighlighted(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneTrackHighlighted);
    }

    public function setTakeLaneTrackHighlighted(ColorValue|null $takeLaneTrackHighlighted): self
    {
        $this->takeLaneTrackHighlighted = $takeLaneTrackHighlighted;

        return $this;
    }

    public function getTakeLaneTrackNotHighlighted(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneTrackNotHighlighted);
    }

    public function setTakeLaneTrackNotHighlighted(ColorValue|null $takeLaneTrackNotHighlighted): self
    {
        $this->takeLaneTrackNotHighlighted = $takeLaneTrackNotHighlighted;

        return $this;
    }

    public function getAutomationColor(): Value|ColorValue|null
    {
        return $this->format($this->automationColor);
    }

    public function setAutomationColor(ColorValue|null $automationColor): self
    {
        $this->automationColor = $automationColor;

        return $this;
    }

    public function getAutomationGrid(): Value|ColorValue|null
    {
        return $this->format($this->automationGrid);
    }

    public function setAutomationGrid(ColorValue|null $automationGrid): self
    {
        $this->automationGrid = $automationGrid;

        return $this;
    }

    public function getLoopColor(): Value|ColorValue|null
    {
        return $this->format($this->loopColor);
    }

    public function setLoopColor(ColorValue|null $loopColor): self
    {
        $this->loopColor = $loopColor;

        return $this;
    }

    public function getOffGridLoopColor(): Value|ColorValue|null
    {
        return $this->format($this->offGridLoopColor);
    }

    public function setOffGridLoopColor(ColorValue|null $offGridLoopColor): self
    {
        $this->offGridLoopColor = $offGridLoopColor;

        return $this;
    }

    public function getArrangementRulerMarkings(): Value|ColorValue|null
    {
        return $this->format($this->arrangementRulerMarkings);
    }

    public function setArrangementRulerMarkings(ColorValue|null $arrangementRulerMarkings): self
    {
        $this->arrangementRulerMarkings = $arrangementRulerMarkings;

        return $this;
    }

    public function getDetailViewRulerMarkings(): Value|ColorValue|null
    {
        return $this->format($this->detailViewRulerMarkings);
    }

    public function setDetailViewRulerMarkings(ColorValue|null $detailViewRulerMarkings): self
    {
        $this->detailViewRulerMarkings = $detailViewRulerMarkings;

        return $this;
    }

    public function getShadowDark(): Value|ColorValue|null
    {
        return $this->format($this->shadowDark);
    }

    public function setShadowDark(ColorValue|null $shadowDark): self
    {
        $this->shadowDark = $shadowDark;

        return $this;
    }

    public function getShadowLight(): Value|ColorValue|null
    {
        return $this->format($this->shadowLight);
    }

    public function setShadowLight(ColorValue|null $shadowLight): self
    {
        $this->shadowLight = $shadowLight;

        return $this;
    }

    public function getDisplayBackground(): Value|ColorValue|null
    {
        return $this->format($this->displayBackground);
    }

    public function setDisplayBackground(ColorValue|null $displayBackground): self
    {
        $this->displayBackground = $displayBackground;

        return $this;
    }

    public function getAbletonColor(): Value|ColorValue|null
    {
        return $this->format($this->abletonColor);
    }

    public function setAbletonColor(ColorValue|null $abletonColor): self
    {
        $this->abletonColor = $abletonColor;

        return $this;
    }

    public function getWaveformColor(): Value|ColorValue|null
    {
        return $this->format($this->waveformColor);
    }

    public function setWaveformColor(ColorValue|null $waveformColor): self
    {
        $this->waveformColor = $waveformColor;

        return $this;
    }

    public function getDimmedWaveformColor(): Value|ColorValue|null
    {
        return $this->format($this->dimmedWaveformColor);
    }

    public function setDimmedWaveformColor(ColorValue|null $dimmedWaveformColor): self
    {
        $this->dimmedWaveformColor = $dimmedWaveformColor;

        return $this;
    }

    public function getVelocityColor(): Value|ColorValue|null
    {
        return $this->format($this->velocityColor);
    }

    public function setVelocityColor(ColorValue|null $velocityColor): self
    {
        $this->velocityColor = $velocityColor;

        return $this;
    }

    public function getVelocitySelectedOrHovered(): Value|ColorValue|null
    {
        return $this->format($this->velocitySelectedOrHovered);
    }

    public function setVelocitySelectedOrHovered(ColorValue|null $velocitySelectedOrHovered): self
    {
        $this->velocitySelectedOrHovered = $velocitySelectedOrHovered;

        return $this;
    }

    public function getNoteProbability(): Value|ColorValue|null
    {
        return $this->format($this->noteProbability);
    }

    public function setNoteProbability(ColorValue|null $noteProbability): self
    {
        $this->noteProbability = $noteProbability;

        return $this;
    }

    public function getAlert(): Value|ColorValue|null
    {
        return $this->format($this->alert);
    }

    public function setAlert(ColorValue|null $alert): self
    {
        $this->alert = $alert;

        return $this;
    }

    public function getControlOnForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlOnForeground);
    }

    public function setControlOnForeground(ColorValue|null $controlOnForeground): self
    {
        $this->controlOnForeground = $controlOnForeground;

        return $this;
    }

    public function getControlOffForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlOffForeground);
    }

    public function setControlOffForeground(ColorValue|null $controlOffForeground): self
    {
        $this->controlOffForeground = $controlOffForeground;

        return $this;
    }

    public function getControlOnDisabledForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlOnDisabledForeground);
    }

    public function setControlOnDisabledForeground(ColorValue|null $controlOnDisabledForeground): self
    {
        $this->controlOnDisabledForeground = $controlOnDisabledForeground;

        return $this;
    }

    public function getControlOffDisabledForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlOffDisabledForeground);
    }

    public function setControlOffDisabledForeground(ColorValue|null $controlOffDisabledForeground): self
    {
        $this->controlOffDisabledForeground = $controlOffDisabledForeground;

        return $this;
    }

    public function getControlOnAlternativeForeground(): Value|ColorValue|null
    {
        return $this->format($this->controlOnAlternativeForeground);
    }

    public function setControlOnAlternativeForeground(ColorValue|null $controlOnAlternativeForeground): self
    {
        $this->controlOnAlternativeForeground = $controlOnAlternativeForeground;

        return $this;
    }

    public function getControlTextBack(): Value|ColorValue|null
    {
        return $this->format($this->controlTextBack);
    }

    public function setControlTextBack(ColorValue|null $controlTextBack): self
    {
        $this->controlTextBack = $controlTextBack;

        return $this;
    }

    public function getControlContrastFrame(): Value|ColorValue|null
    {
        return $this->format($this->controlContrastFrame);
    }

    public function setControlContrastFrame(ColorValue|null $controlContrastFrame): self
    {
        $this->controlContrastFrame = $controlContrastFrame;

        return $this;
    }

    public function getControlSelectionFrame(): Value|ColorValue|null
    {
        return $this->format($this->controlSelectionFrame);
    }

    public function setControlSelectionFrame(ColorValue|null $controlSelectionFrame): self
    {
        $this->controlSelectionFrame = $controlSelectionFrame;

        return $this;
    }

    public function getControlContrastTransport(): Value|ColorValue|null
    {
        return $this->format($this->controlContrastTransport);
    }

    public function setControlContrastTransport(ColorValue|null $controlContrastTransport): self
    {
        $this->controlContrastTransport = $controlContrastTransport;

        return $this;
    }

    public function getProgress(): Value|ColorValue|null
    {
        return $this->format($this->progress);
    }

    public function setProgress(ColorValue|null $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getProgressText(): Value|ColorValue|null
    {
        return $this->format($this->progressText);
    }

    public function setProgressText(ColorValue|null $progressText): self
    {
        $this->progressText = $progressText;

        return $this;
    }

    public function getTransportProgress(): Value|ColorValue|null
    {
        return $this->format($this->transportProgress);
    }

    public function setTransportProgress(ColorValue|null $transportProgress): self
    {
        $this->transportProgress = $transportProgress;

        return $this;
    }

    public function getClipSlotButton(): Value|ColorValue|null
    {
        return $this->format($this->clipSlotButton);
    }

    public function setClipSlotButton(ColorValue|null $clipSlotButton): self
    {
        $this->clipSlotButton = $clipSlotButton;

        return $this;
    }

    public function getBrowserBar(): Value|ColorValue|null
    {
        return $this->format($this->browserBar);
    }

    public function setBrowserBar(ColorValue|null $browserBar): self
    {
        $this->browserBar = $browserBar;

        return $this;
    }

    public function getBrowserBarOverlayHintTextColor(): Value|ColorValue|null
    {
        return $this->format($this->browserBarOverlayHintTextColor);
    }

    public function setBrowserBarOverlayHintTextColor(ColorValue|null $browserBarOverlayHintTextColor): self
    {
        $this->browserBarOverlayHintTextColor = $browserBarOverlayHintTextColor;

        return $this;
    }

    public function getBrowserDisabledItem(): Value|ColorValue|null
    {
        return $this->format($this->browserDisabledItem);
    }

    public function setBrowserDisabledItem(ColorValue|null $browserDisabledItem): self
    {
        $this->browserDisabledItem = $browserDisabledItem;

        return $this;
    }

    public function getBrowserSampleWaveform(): Value|ColorValue|null
    {
        return $this->format($this->browserSampleWaveform);
    }

    public function setBrowserSampleWaveform(ColorValue|null $browserSampleWaveform): self
    {
        $this->browserSampleWaveform = $browserSampleWaveform;

        return $this;
    }

    public function getAutomationDisabled(): Value|ColorValue|null
    {
        return $this->format($this->automationDisabled);
    }

    public function setAutomationDisabled(ColorValue|null $automationDisabled): self
    {
        $this->automationDisabled = $automationDisabled;

        return $this;
    }

    public function getAutomationMouseOver(): Value|ColorValue|null
    {
        return $this->format($this->automationMouseOver);
    }

    public function setAutomationMouseOver(ColorValue|null $automationMouseOver): self
    {
        $this->automationMouseOver = $automationMouseOver;

        return $this;
    }

    public function getMidiNoteMaxVelocity(): Value|ColorValue|null
    {
        return $this->format($this->midiNoteMaxVelocity);
    }

    public function setMidiNoteMaxVelocity(ColorValue|null $midiNoteMaxVelocity): self
    {
        $this->midiNoteMaxVelocity = $midiNoteMaxVelocity;

        return $this;
    }

    public function getRetroDisplayBackground(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayBackground);
    }

    public function setRetroDisplayBackground(ColorValue|null $retroDisplayBackground): self
    {
        $this->retroDisplayBackground = $retroDisplayBackground;

        return $this;
    }

    public function getRetroDisplayBackgroundLine(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayBackgroundLine);
    }

    public function setRetroDisplayBackgroundLine(ColorValue|null $retroDisplayBackgroundLine): self
    {
        $this->retroDisplayBackgroundLine = $retroDisplayBackgroundLine;

        return $this;
    }

    public function getRetroDisplayForeground(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayForeground);
    }

    public function setRetroDisplayForeground(ColorValue|null $retroDisplayForeground): self
    {
        $this->retroDisplayForeground = $retroDisplayForeground;

        return $this;
    }

    public function getRetroDisplayForeground2(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayForeground2);
    }

    public function setRetroDisplayForeground2(ColorValue|null $retroDisplayForeground2): self
    {
        $this->retroDisplayForeground2 = $retroDisplayForeground2;

        return $this;
    }

    public function getRetroDisplayForegroundDisabled(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayForegroundDisabled);
    }

    public function setRetroDisplayForegroundDisabled(ColorValue|null $retroDisplayForegroundDisabled): self
    {
        $this->retroDisplayForegroundDisabled = $retroDisplayForegroundDisabled;

        return $this;
    }

    public function getRetroDisplayGreen(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayGreen);
    }

    public function setRetroDisplayGreen(ColorValue|null $retroDisplayGreen): self
    {
        $this->retroDisplayGreen = $retroDisplayGreen;

        return $this;
    }

    public function getRetroDisplayRed(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayRed);
    }

    public function setRetroDisplayRed(ColorValue|null $retroDisplayRed): self
    {
        $this->retroDisplayRed = $retroDisplayRed;

        return $this;
    }

    public function getRetroDisplayHandle1(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayHandle1);
    }

    public function setRetroDisplayHandle1(ColorValue|null $retroDisplayHandle1): self
    {
        $this->retroDisplayHandle1 = $retroDisplayHandle1;

        return $this;
    }

    public function getRetroDisplayHandle2(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayHandle2);
    }

    public function setRetroDisplayHandle2(ColorValue|null $retroDisplayHandle2): self
    {
        $this->retroDisplayHandle2 = $retroDisplayHandle2;

        return $this;
    }

    public function getRetroDisplayScaleText(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayScaleText);
    }

    public function setRetroDisplayScaleText(ColorValue|null $retroDisplayScaleText): self
    {
        $this->retroDisplayScaleText = $retroDisplayScaleText;

        return $this;
    }

    public function getRetroDisplayTitle(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayTitle);
    }

    public function setRetroDisplayTitle(ColorValue|null $retroDisplayTitle): self
    {
        $this->retroDisplayTitle = $retroDisplayTitle;

        return $this;
    }

    public function getThresholdLineColor(): Value|ColorValue|null
    {
        return $this->format($this->thresholdLineColor);
    }

    public function setThresholdLineColor(ColorValue|null $thresholdLineColor): self
    {
        $this->thresholdLineColor = $thresholdLineColor;

        return $this;
    }

    public function getGainReductionLineColor(): Value|ColorValue|null
    {
        return $this->format($this->gainReductionLineColor);
    }

    public function setGainReductionLineColor(ColorValue|null $gainReductionLineColor): self
    {
        $this->gainReductionLineColor = $gainReductionLineColor;

        return $this;
    }

    public function getInputCurveColor(): Value|ColorValue|null
    {
        return $this->format($this->inputCurveColor);
    }

    public function setInputCurveColor(ColorValue|null $inputCurveColor): self
    {
        $this->inputCurveColor = $inputCurveColor;

        return $this;
    }

    public function getInputCurveOutlineColor(): Value|ColorValue|null
    {
        return $this->format($this->inputCurveOutlineColor);
    }

    public function setInputCurveOutlineColor(ColorValue|null $inputCurveOutlineColor): self
    {
        $this->inputCurveOutlineColor = $inputCurveOutlineColor;

        return $this;
    }

    public function getOutputCurveColor(): Value|ColorValue|null
    {
        return $this->format($this->outputCurveColor);
    }

    public function setOutputCurveColor(ColorValue|null $outputCurveColor): self
    {
        $this->outputCurveColor = $outputCurveColor;

        return $this;
    }

    public function getOutputCurveOutlineColor(): Value|ColorValue|null
    {
        return $this->format($this->outputCurveOutlineColor);
    }

    public function setOutputCurveOutlineColor(ColorValue|null $outputCurveOutlineColor): self
    {
        $this->outputCurveOutlineColor = $outputCurveOutlineColor;

        return $this;
    }

    public function getSpectrumDefaultColor(): Value|ColorValue|null
    {
        return $this->format($this->spectrumDefaultColor);
    }

    public function setSpectrumDefaultColor(ColorValue|null $spectrumDefaultColor): self
    {
        $this->spectrumDefaultColor = $spectrumDefaultColor;

        return $this;
    }

    public function getSpectrumAlternativeColor(): Value|ColorValue|null
    {
        return $this->format($this->spectrumAlternativeColor);
    }

    public function setSpectrumAlternativeColor(ColorValue|null $spectrumAlternativeColor): self
    {
        $this->spectrumAlternativeColor = $spectrumAlternativeColor;

        return $this;
    }

    public function getSpectrumGridLines(): Value|ColorValue|null
    {
        return $this->format($this->spectrumGridLines);
    }

    public function setSpectrumGridLines(ColorValue|null $spectrumGridLines): self
    {
        $this->spectrumGridLines = $spectrumGridLines;

        return $this;
    }

    public function getOperator1(): Value|ColorValue|null
    {
        return $this->format($this->operator1);
    }

    public function setOperator1(ColorValue|null $operator1): self
    {
        $this->operator1 = $operator1;

        return $this;
    }

    public function getOperator2(): Value|ColorValue|null
    {
        return $this->format($this->operator2);
    }

    public function setOperator2(ColorValue|null $operator2): self
    {
        $this->operator2 = $operator2;

        return $this;
    }

    public function getOperator3(): Value|ColorValue|null
    {
        return $this->format($this->operator3);
    }

    public function setOperator3(ColorValue|null $operator3): self
    {
        $this->operator3 = $operator3;

        return $this;
    }

    public function getOperator4(): Value|ColorValue|null
    {
        return $this->format($this->operator4);
    }

    public function setOperator4(ColorValue|null $operator4): self
    {
        $this->operator4 = $operator4;

        return $this;
    }

    public function getDrumRackScroller1(): Value|ColorValue|null
    {
        return $this->format($this->drumRackScroller1);
    }

    public function setDrumRackScroller1(ColorValue|null $drumRackScroller1): self
    {
        $this->drumRackScroller1 = $drumRackScroller1;

        return $this;
    }

    public function getDrumRackScroller2(): Value|ColorValue|null
    {
        return $this->format($this->drumRackScroller2);
    }

    public function setDrumRackScroller2(ColorValue|null $drumRackScroller2): self
    {
        $this->drumRackScroller2 = $drumRackScroller2;

        return $this;
    }

    public function getFilledDrumRackPad(): Value|ColorValue|null
    {
        return $this->format($this->filledDrumRackPad);
    }

    public function setFilledDrumRackPad(ColorValue|null $filledDrumRackPad): self
    {
        $this->filledDrumRackPad = $filledDrumRackPad;

        return $this;
    }

    public function getSurfaceAreaFocus(): Value|ColorValue|null
    {
        return $this->format($this->surfaceAreaFocus);
    }

    public function setSurfaceAreaFocus(ColorValue|null $surfaceAreaFocus): self
    {
        $this->surfaceAreaFocus = $surfaceAreaFocus;

        return $this;
    }

    public function getFreezeColor(): Value|ColorValue|null
    {
        return $this->format($this->freezeColor);
    }

    public function setFreezeColor(ColorValue|null $freezeColor): self
    {
        $this->freezeColor = $freezeColor;

        return $this;
    }

    public function getGridLabel(): Value|ColorValue|null
    {
        return $this->format($this->gridLabel);
    }

    public function setGridLabel(ColorValue|null $gridLabel): self
    {
        $this->gridLabel = $gridLabel;

        return $this;
    }

    public function getGridLineBase(): Value|ColorValue|null
    {
        return $this->format($this->gridLineBase);
    }

    public function setGridLineBase(ColorValue|null $gridLineBase): self
    {
        $this->gridLineBase = $gridLineBase;

        return $this;
    }

    public function getArrangerGridTiles(): Value|ColorValue|null
    {
        return $this->format($this->arrangerGridTiles);
    }

    public function setArrangerGridTiles(ColorValue|null $arrangerGridTiles): self
    {
        $this->arrangerGridTiles = $arrangerGridTiles;

        return $this;
    }

    public function getDetailGridTiles(): Value|ColorValue|null
    {
        return $this->format($this->detailGridTiles);
    }

    public function setDetailGridTiles(ColorValue|null $detailGridTiles): self
    {
        $this->detailGridTiles = $detailGridTiles;

        return $this;
    }

    public function getGridGuideline(): Value|ColorValue|null
    {
        return $this->format($this->gridGuideline);
    }

    public function setGridGuideline(ColorValue|null $gridGuideline): self
    {
        $this->gridGuideline = $gridGuideline;

        return $this;
    }

    public function getOffGridGuideline(): Value|ColorValue|null
    {
        return $this->format($this->offGridGuideline);
    }

    public function setOffGridGuideline(ColorValue|null $offGridGuideline): self
    {
        $this->offGridGuideline = $offGridGuideline;

        return $this;
    }

    public function getTreeColumnHeadBackground(): Value|ColorValue|null
    {
        return $this->format($this->treeColumnHeadBackground);
    }

    public function setTreeColumnHeadBackground(ColorValue|null $treeColumnHeadBackground): self
    {
        $this->treeColumnHeadBackground = $treeColumnHeadBackground;

        return $this;
    }

    public function getTreeColumnHeadForeground(): Value|ColorValue|null
    {
        return $this->format($this->treeColumnHeadForeground);
    }

    public function setTreeColumnHeadForeground(ColorValue|null $treeColumnHeadForeground): self
    {
        $this->treeColumnHeadForeground = $treeColumnHeadForeground;

        return $this;
    }

    public function getTreeColumnHeadSelected(): Value|ColorValue|null
    {
        return $this->format($this->treeColumnHeadSelected);
    }

    public function setTreeColumnHeadSelected(ColorValue|null $treeColumnHeadSelected): self
    {
        $this->treeColumnHeadSelected = $treeColumnHeadSelected;

        return $this;
    }

    public function getTreeColumnHeadFocus(): Value|ColorValue|null
    {
        return $this->format($this->treeColumnHeadFocus);
    }

    public function setTreeColumnHeadFocus(ColorValue|null $treeColumnHeadFocus): self
    {
        $this->treeColumnHeadFocus = $treeColumnHeadFocus;

        return $this;
    }

    public function getTreeColumnHeadControl(): Value|ColorValue|null
    {
        return $this->format($this->treeColumnHeadControl);
    }

    public function setTreeColumnHeadControl(ColorValue|null $treeColumnHeadControl): self
    {
        $this->treeColumnHeadControl = $treeColumnHeadControl;

        return $this;
    }

    public function getTreeRowCategoryForeground(): Value|ColorValue|null
    {
        return $this->format($this->treeRowCategoryForeground);
    }

    public function setTreeRowCategoryForeground(ColorValue|null $treeRowCategoryForeground): self
    {
        $this->treeRowCategoryForeground = $treeRowCategoryForeground;

        return $this;
    }

    public function getTreeRowCategoryBackground(): Value|ColorValue|null
    {
        return $this->format($this->treeRowCategoryBackground);
    }

    public function setTreeRowCategoryBackground(ColorValue|null $treeRowCategoryBackground): self
    {
        $this->treeRowCategoryBackground = $treeRowCategoryBackground;

        return $this;
    }

    public function getSearchIndication(): Value|ColorValue|null
    {
        return $this->format($this->searchIndication);
    }

    public function setSearchIndication(ColorValue|null $searchIndication): self
    {
        $this->searchIndication = $searchIndication;

        return $this;
    }

    public function getSearchIndicationStandby(): Value|ColorValue|null
    {
        return $this->format($this->searchIndicationStandby);
    }

    public function setSearchIndicationStandby(ColorValue|null $searchIndicationStandby): self
    {
        $this->searchIndicationStandby = $searchIndicationStandby;

        return $this;
    }

    public function getKeyZoneBackground(): Value|ColorValue|null
    {
        return $this->format($this->keyZoneBackground);
    }

    public function setKeyZoneBackground(ColorValue|null $keyZoneBackground): self
    {
        $this->keyZoneBackground = $keyZoneBackground;

        return $this;
    }

    public function getKeyZoneCrossfadeRamp(): Value|ColorValue|null
    {
        return $this->format($this->keyZoneCrossfadeRamp);
    }

    public function setKeyZoneCrossfadeRamp(ColorValue|null $keyZoneCrossfadeRamp): self
    {
        $this->keyZoneCrossfadeRamp = $keyZoneCrossfadeRamp;

        return $this;
    }

    public function getVelocityZoneBackground(): Value|ColorValue|null
    {
        return $this->format($this->velocityZoneBackground);
    }

    public function setVelocityZoneBackground(ColorValue|null $velocityZoneBackground): self
    {
        $this->velocityZoneBackground = $velocityZoneBackground;

        return $this;
    }

    public function getVelocityZoneCrossfadeRamp(): Value|ColorValue|null
    {
        return $this->format($this->velocityZoneCrossfadeRamp);
    }

    public function setVelocityZoneCrossfadeRamp(ColorValue|null $velocityZoneCrossfadeRamp): self
    {
        $this->velocityZoneCrossfadeRamp = $velocityZoneCrossfadeRamp;

        return $this;
    }

    public function getSelectorZoneBackground(): Value|ColorValue|null
    {
        return $this->format($this->selectorZoneBackground);
    }

    public function setSelectorZoneBackground(ColorValue|null $selectorZoneBackground): self
    {
        $this->selectorZoneBackground = $selectorZoneBackground;

        return $this;
    }

    public function getSelectorZoneCrossfadeRamp(): Value|ColorValue|null
    {
        return $this->format($this->selectorZoneCrossfadeRamp);
    }

    public function setSelectorZoneCrossfadeRamp(ColorValue|null $selectorZoneCrossfadeRamp): self
    {
        $this->selectorZoneCrossfadeRamp = $selectorZoneCrossfadeRamp;

        return $this;
    }

    public function getViewCheckControlEnabledOff(): Value|ColorValue|null
    {
        return $this->format($this->viewCheckControlEnabledOff);
    }

    public function setViewCheckControlEnabledOff(ColorValue|null $viewCheckControlEnabledOff): self
    {
        $this->viewCheckControlEnabledOff = $viewCheckControlEnabledOff;

        return $this;
    }

    public function getViewCheckControlDisabledOn(): Value|ColorValue|null
    {
        return $this->format($this->viewCheckControlDisabledOn);
    }

    public function setViewCheckControlDisabledOn(ColorValue|null $viewCheckControlDisabledOn): self
    {
        $this->viewCheckControlDisabledOn = $viewCheckControlDisabledOn;

        return $this;
    }

    public function getViewCheckControlDisabledOff(): Value|ColorValue|null
    {
        return $this->format($this->viewCheckControlDisabledOff);
    }

    public function setViewCheckControlDisabledOff(ColorValue|null $viewCheckControlDisabledOff): self
    {
        $this->viewCheckControlDisabledOff = $viewCheckControlDisabledOff;

        return $this;
    }

    public function getDefaultBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->defaultBlendFactor);
    }

    public function setDefaultBlendFactor(ColorValue|null $defaultBlendFactor): self
    {
        $this->defaultBlendFactor = $defaultBlendFactor;

        return $this;
    }

    public function getIconBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->iconBlendFactor);
    }

    public function setIconBlendFactor(ColorValue|null $iconBlendFactor): self
    {
        $this->iconBlendFactor = $iconBlendFactor;

        return $this;
    }

    public function getClipBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->clipBlendFactor);
    }

    public function setClipBlendFactor(ColorValue|null $clipBlendFactor): self
    {
        $this->clipBlendFactor = $clipBlendFactor;

        return $this;
    }

    public function getNoteBorderStandbyBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->noteBorderStandbyBlendFactor);
    }

    public function setNoteBorderStandbyBlendFactor(ColorValue|null $noteBorderStandbyBlendFactor): self
    {
        $this->noteBorderStandbyBlendFactor = $noteBorderStandbyBlendFactor;

        return $this;
    }

    public function getRetroDisplayBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->retroDisplayBlendFactor);
    }

    public function setRetroDisplayBlendFactor(ColorValue|null $retroDisplayBlendFactor): self
    {
        $this->retroDisplayBlendFactor = $retroDisplayBlendFactor;

        return $this;
    }

    public function getCheckControlNotCheckedBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->checkControlNotCheckedBlendFactor);
    }

    public function setCheckControlNotCheckedBlendFactor(ColorValue|null $checkControlNotCheckedBlendFactor): self
    {
        $this->checkControlNotCheckedBlendFactor = $checkControlNotCheckedBlendFactor;

        return $this;
    }

    public function getMixSurfaceAreaBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->mixSurfaceAreaBlendFactor);
    }

    public function setMixSurfaceAreaBlendFactor(ColorValue|null $mixSurfaceAreaBlendFactor): self
    {
        $this->mixSurfaceAreaBlendFactor = $mixSurfaceAreaBlendFactor;

        return $this;
    }

    public function getTextFrameSegmentBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->textFrameSegmentBlendFactor);
    }

    public function setTextFrameSegmentBlendFactor(ColorValue|null $textFrameSegmentBlendFactor): self
    {
        $this->textFrameSegmentBlendFactor = $textFrameSegmentBlendFactor;

        return $this;
    }

    public function getNoteDisabledSelectedBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->noteDisabledSelectedBlendFactor);
    }

    public function setNoteDisabledSelectedBlendFactor(ColorValue|null $noteDisabledSelectedBlendFactor): self
    {
        $this->noteDisabledSelectedBlendFactor = $noteDisabledSelectedBlendFactor;

        return $this;
    }

    public function getBackgroundClip(): Value|ColorValue|null
    {
        return $this->format($this->backgroundClip);
    }

    public function setBackgroundClip(ColorValue|null $backgroundClip): self
    {
        $this->backgroundClip = $backgroundClip;

        return $this;
    }

    public function getBackgroundClipFrame(): Value|ColorValue|null
    {
        return $this->format($this->backgroundClipFrame);
    }

    public function setBackgroundClipFrame(ColorValue|null $backgroundClipFrame): self
    {
        $this->backgroundClipFrame = $backgroundClipFrame;

        return $this;
    }

    public function getWarperTimeBarRulerBackground(): Value|ColorValue|null
    {
        return $this->format($this->warperTimeBarRulerBackground);
    }

    public function setWarperTimeBarRulerBackground(ColorValue|null $warperTimeBarRulerBackground): self
    {
        $this->warperTimeBarRulerBackground = $warperTimeBarRulerBackground;

        return $this;
    }

    public function getWarperTimeBarMarkerBackground(): Value|ColorValue|null
    {
        return $this->format($this->warperTimeBarMarkerBackground);
    }

    public function setWarperTimeBarMarkerBackground(ColorValue|null $warperTimeBarMarkerBackground): self
    {
        $this->warperTimeBarMarkerBackground = $warperTimeBarMarkerBackground;

        return $this;
    }

    public function getMinVelocityNoteBlendFactor(): Value|ColorValue|null
    {
        return $this->format($this->minVelocityNoteBlendFactor);
    }

    public function setMinVelocityNoteBlendFactor(ColorValue|null $minVelocityNoteBlendFactor): self
    {
        $this->minVelocityNoteBlendFactor = $minVelocityNoteBlendFactor;

        return $this;
    }

    public function getStripedBackgroundShadeFactor(): Value|ColorValue|null
    {
        return $this->format($this->stripedBackgroundShadeFactor);
    }

    public function setStripedBackgroundShadeFactor(ColorValue|null $stripedBackgroundShadeFactor): self
    {
        $this->stripedBackgroundShadeFactor = $stripedBackgroundShadeFactor;

        return $this;
    }

    public function getNonEditableAutomationAlpha(): Value|ColorValue|null
    {
        return $this->format($this->nonEditableAutomationAlpha);
    }

    public function setNonEditableAutomationAlpha(ColorValue|null $nonEditableAutomationAlpha): self
    {
        $this->nonEditableAutomationAlpha = $nonEditableAutomationAlpha;

        return $this;
    }

    public function getDisabledContextMenuIconAlpha(): Value|ColorValue|null
    {
        return $this->format($this->disabledContextMenuIconAlpha);
    }

    public function setDisabledContextMenuIconAlpha(ColorValue|null $disabledContextMenuIconAlpha): self
    {
        $this->disabledContextMenuIconAlpha = $disabledContextMenuIconAlpha;

        return $this;
    }

    public function getClipBorderAlpha(): Value|ColorValue|null
    {
        return $this->format($this->clipBorderAlpha);
    }

    public function setClipBorderAlpha(ColorValue|null $clipBorderAlpha): self
    {
        $this->clipBorderAlpha = $clipBorderAlpha;

        return $this;
    }

    public function getScrollBarAlpha(): Value|ColorValue|null
    {
        return $this->format($this->scrollBarAlpha);
    }

    public function setScrollBarAlpha(ColorValue|null $scrollBarAlpha): self
    {
        $this->scrollBarAlpha = $scrollBarAlpha;

        return $this;
    }

    public function getScrollBarOnHoverAlpha(): Value|ColorValue|null
    {
        return $this->format($this->scrollBarOnHoverAlpha);
    }

    public function setScrollBarOnHoverAlpha(ColorValue|null $scrollBarOnHoverAlpha): self
    {
        $this->scrollBarOnHoverAlpha = $scrollBarOnHoverAlpha;

        return $this;
    }

    public function getScrollBarBackgroundAlpha(): Value|ColorValue|null
    {
        return $this->format($this->scrollBarBackgroundAlpha);
    }

    public function setScrollBarBackgroundAlpha(ColorValue|null $scrollBarBackgroundAlpha): self
    {
        $this->scrollBarBackgroundAlpha = $scrollBarBackgroundAlpha;

        return $this;
    }

    public function getInaudibleTakeLightness(): Value|ColorValue|null
    {
        return $this->format($this->inaudibleTakeLightness);
    }

    public function setInaudibleTakeLightness(ColorValue|null $inaudibleTakeLightness): self
    {
        $this->inaudibleTakeLightness = $inaudibleTakeLightness;

        return $this;
    }

    public function getInaudibleTakeSaturation(): Value|ColorValue|null
    {
        return $this->format($this->inaudibleTakeSaturation);
    }

    public function setInaudibleTakeSaturation(ColorValue|null $inaudibleTakeSaturation): self
    {
        $this->inaudibleTakeSaturation = $inaudibleTakeSaturation;

        return $this;
    }

    public function getInaudibleTakeNameLightness(): Value|ColorValue|null
    {
        return $this->format($this->inaudibleTakeNameLightness);
    }

    public function setInaudibleTakeNameLightness(ColorValue|null $inaudibleTakeNameLightness): self
    {
        $this->inaudibleTakeNameLightness = $inaudibleTakeNameLightness;

        return $this;
    }

    public function getInaudibleTakeNameSaturation(): Value|ColorValue|null
    {
        return $this->format($this->inaudibleTakeNameSaturation);
    }

    public function setInaudibleTakeNameSaturation(ColorValue|null $inaudibleTakeNameSaturation): self
    {
        $this->inaudibleTakeNameSaturation = $inaudibleTakeNameSaturation;

        return $this;
    }

    public function getAutomationLaneClipBodyLightness(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneClipBodyLightness);
    }

    public function setAutomationLaneClipBodyLightness(ColorValue|null $automationLaneClipBodyLightness): self
    {
        $this->automationLaneClipBodyLightness = $automationLaneClipBodyLightness;

        return $this;
    }

    public function getAutomationLaneClipBodySaturation(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneClipBodySaturation);
    }

    public function setAutomationLaneClipBodySaturation(ColorValue|null $automationLaneClipBodySaturation): self
    {
        $this->automationLaneClipBodySaturation = $automationLaneClipBodySaturation;

        return $this;
    }

    public function getAutomationLaneHeaderLightness(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneHeaderLightness);
    }

    public function setAutomationLaneHeaderLightness(ColorValue|null $automationLaneHeaderLightness): self
    {
        $this->automationLaneHeaderLightness = $automationLaneHeaderLightness;

        return $this;
    }

    public function getAutomationLaneHeaderSaturation(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneHeaderSaturation);
    }

    public function setAutomationLaneHeaderSaturation(ColorValue|null $automationLaneHeaderSaturation): self
    {
        $this->automationLaneHeaderSaturation = $automationLaneHeaderSaturation;

        return $this;
    }

    public function getTakeLaneHeaderLightness(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneHeaderLightness);
    }

    public function setTakeLaneHeaderLightness(ColorValue|null $takeLaneHeaderLightness): self
    {
        $this->takeLaneHeaderLightness = $takeLaneHeaderLightness;

        return $this;
    }

    public function getTakeLaneHeaderSaturation(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneHeaderSaturation);
    }

    public function setTakeLaneHeaderSaturation(ColorValue|null $takeLaneHeaderSaturation): self
    {
        $this->takeLaneHeaderSaturation = $takeLaneHeaderSaturation;

        return $this;
    }

    public function getTakeLaneHeaderNameLightness(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneHeaderNameLightness);
    }

    public function setTakeLaneHeaderNameLightness(ColorValue|null $takeLaneHeaderNameLightness): self
    {
        $this->takeLaneHeaderNameLightness = $takeLaneHeaderNameLightness;

        return $this;
    }

    public function getTakeLaneHeaderNameSaturation(): Value|ColorValue|null
    {
        return $this->format($this->takeLaneHeaderNameSaturation);
    }

    public function setTakeLaneHeaderNameSaturation(ColorValue|null $takeLaneHeaderNameSaturation): self
    {
        $this->takeLaneHeaderNameSaturation = $takeLaneHeaderNameSaturation;

        return $this;
    }

    public function getAutomationLaneHeaderNameLightness(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneHeaderNameLightness);
    }

    public function setAutomationLaneHeaderNameLightness(ColorValue|null $automationLaneHeaderNameLightness): self
    {
        $this->automationLaneHeaderNameLightness = $automationLaneHeaderNameLightness;

        return $this;
    }

    public function getAutomationLaneHeaderNameSaturation(): Value|ColorValue|null
    {
        return $this->format($this->automationLaneHeaderNameSaturation);
    }

    public function setAutomationLaneHeaderNameSaturation(ColorValue|null $automationLaneHeaderNameSaturation): self
    {
        $this->automationLaneHeaderNameSaturation = $automationLaneHeaderNameSaturation;

        return $this;
    }

    public function getClipContrastColorAdjustment(): Value|ColorValue|null
    {
        return $this->format($this->clipContrastColorAdjustment);
    }

    public function setClipContrastColorAdjustment(ColorValue|null $clipContrastColorAdjustment): self
    {
        $this->clipContrastColorAdjustment = $clipContrastColorAdjustment;

        return $this;
    }

    public function getBipolarPotiTriangle(): Value|ColorValue|null
    {
        return $this->format($this->bipolarPotiTriangle);
    }

    public function setBipolarPotiTriangle(ColorValue|null $bipolarPotiTriangle): self
    {
        $this->bipolarPotiTriangle = $bipolarPotiTriangle;

        return $this;
    }

    public function getPoti(): Value|ColorValue|null
    {
        return $this->format($this->poti);
    }

    public function setPoti(ColorValue|null $poti): self
    {
        $this->poti = $poti;

        return $this;
    }

    public function getDeactivatedPoti(): Value|ColorValue|null
    {
        return $this->format($this->deactivatedPoti);
    }

    public function setDeactivatedPoti(ColorValue|null $deactivatedPoti): self
    {
        $this->deactivatedPoti = $deactivatedPoti;

        return $this;
    }

    public function getPotiNeedle(): Value|ColorValue|null
    {
        return $this->format($this->potiNeedle);
    }

    public function setPotiNeedle(ColorValue|null $potiNeedle): self
    {
        $this->potiNeedle = $potiNeedle;

        return $this;
    }

    public function getDeactivatedPotiNeedle(): Value|ColorValue|null
    {
        return $this->format($this->deactivatedPotiNeedle);
    }

    public function setDeactivatedPotiNeedle(ColorValue|null $deactivatedPotiNeedle): self
    {
        $this->deactivatedPotiNeedle = $deactivatedPotiNeedle;

        return $this;
    }

    public function getTransportOffBackground(): Value|ColorValue|null
    {
        return $this->format($this->transportOffBackground);
    }

    public function setTransportOffBackground(ColorValue|null $transportOffBackground): self
    {
        $this->transportOffBackground = $transportOffBackground;

        return $this;
    }

    public function getTransportOffDisabledForeground(): Value|ColorValue|null
    {
        return $this->format($this->transportOffDisabledForeground);
    }

    public function setTransportOffDisabledForeground(ColorValue|null $transportOffDisabledForeground): self
    {
        $this->transportOffDisabledForeground = $transportOffDisabledForeground;

        return $this;
    }

    public function getTransportSelectionBackground(): Value|ColorValue|null
    {
        return $this->format($this->transportSelectionBackground);
    }

    public function setTransportSelectionBackground(ColorValue|null $transportSelectionBackground): self
    {
        $this->transportSelectionBackground = $transportSelectionBackground;

        return $this;
    }

    public function getModulation(): Value|ColorValue|null
    {
        return $this->format($this->modulation);
    }

    public function setModulation(ColorValue|null $modulation): self
    {
        $this->modulation = $modulation;

        return $this;
    }

    public function getModulationDisabled(): Value|ColorValue|null
    {
        return $this->format($this->modulationDisabled);
    }

    public function setModulationDisabled(ColorValue|null $modulationDisabled): self
    {
        $this->modulationDisabled = $modulationDisabled;

        return $this;
    }

    public function getModulationMouseOver(): Value|ColorValue|null
    {
        return $this->format($this->modulationMouseOver);
    }

    public function setModulationMouseOver(ColorValue|null $modulationMouseOver): self
    {
        $this->modulationMouseOver = $modulationMouseOver;

        return $this;
    }

    public function getAutomationTransformToolFrame(): Value|ColorValue|null
    {
        return $this->format($this->automationTransformToolFrame);
    }

    public function setAutomationTransformToolFrame(ColorValue|null $automationTransformToolFrame): self
    {
        $this->automationTransformToolFrame = $automationTransformToolFrame;

        return $this;
    }

    public function getAutomationTransformToolFrameActive(): Value|ColorValue|null
    {
        return $this->format($this->automationTransformToolFrameActive);
    }

    public function setAutomationTransformToolFrameActive(ColorValue|null $automationTransformToolFrameActive): self
    {
        $this->automationTransformToolFrameActive = $automationTransformToolFrameActive;

        return $this;
    }

    public function getAutomationTransformToolHandle(): Value|ColorValue|null
    {
        return $this->format($this->automationTransformToolHandle);
    }

    public function setAutomationTransformToolHandle(ColorValue|null $automationTransformToolHandle): self
    {
        $this->automationTransformToolHandle = $automationTransformToolHandle;

        return $this;
    }

    public function getAutomationTransformToolHandleActive(): Value|ColorValue|null
    {
        return $this->format($this->automationTransformToolHandleActive);
    }

    public function setAutomationTransformToolHandleActive(ColorValue|null $automationTransformToolHandleActive): self
    {
        $this->automationTransformToolHandleActive = $automationTransformToolHandleActive;

        return $this;
    }

    public function getMutedAuditionClip(): Value|ColorValue|null
    {
        return $this->format($this->mutedAuditionClip);
    }

    public function setMutedAuditionClip(ColorValue|null $mutedAuditionClip): self
    {
        $this->mutedAuditionClip = $mutedAuditionClip;

        return $this;
    }

    public function getLinkedTrackHover(): Value|ColorValue|null
    {
        return $this->format($this->linkedTrackHover);
    }

    public function setLinkedTrackHover(ColorValue|null $linkedTrackHover): self
    {
        $this->linkedTrackHover = $linkedTrackHover;

        return $this;
    }

    public function getExpressionLaneHeaderHighlight(): Value|ColorValue|null
    {
        return $this->format($this->expressionLaneHeaderHighlight);
    }

    public function setExpressionLaneHeaderHighlight(ColorValue|null $expressionLaneHeaderHighlight): self
    {
        $this->expressionLaneHeaderHighlight = $expressionLaneHeaderHighlight;

        return $this;
    }

    public function getZoomPanHandle(): Value|ColorValue|null
    {
        return $this->format($this->zoomPanHandle);
    }

    public function setZoomPanHandle(ColorValue|null $zoomPanHandle): self
    {
        $this->zoomPanHandle = $zoomPanHandle;

        return $this;
    }

    public function getStandardVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->standardVuMeter);
    }

    public function setStandardVuMeter(ColorValue|null $standardVuMeter): self
    {
        $this->standardVuMeter = $standardVuMeter;

        return $this;
    }

    public function getOverloadVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->overloadVuMeter);
    }

    public function setOverloadVuMeter(ColorValue|null $overloadVuMeter): self
    {
        $this->overloadVuMeter = $overloadVuMeter;

        return $this;
    }

    public function getDisabledVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->disabledVuMeter);
    }

    public function setDisabledVuMeter(ColorValue|null $disabledVuMeter): self
    {
        $this->disabledVuMeter = $disabledVuMeter;

        return $this;
    }

    public function getHeadphonesVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->headphonesVuMeter);
    }

    public function setHeadphonesVuMeter(ColorValue|null $headphonesVuMeter): self
    {
        $this->headphonesVuMeter = $headphonesVuMeter;

        return $this;
    }

    public function getSendsOnlyVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->sendsOnlyVuMeter);
    }

    public function setSendsOnlyVuMeter(ColorValue|null $sendsOnlyVuMeter): self
    {
        $this->sendsOnlyVuMeter = $sendsOnlyVuMeter;

        return $this;
    }

    public function getBipolarGainReductionVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->bipolarGainReductionVuMeter);
    }

    public function setBipolarGainReductionVuMeter(ColorValue|null $bipolarGainReductionVuMeter): self
    {
        $this->bipolarGainReductionVuMeter = $bipolarGainReductionVuMeter;

        return $this;
    }

    public function getOrangeVuMeter(): Value|ColorValue|null
    {
        return $this->format($this->orangeVuMeter);
    }

    public function setOrangeVuMeter(ColorValue|null $orangeVuMeter): self
    {
        $this->orangeVuMeter = $orangeVuMeter;

        return $this;
    }

    /**
     * @throws \ReflectionException
     */
    public function __clone(): void
    {
        if ($this->format !== ColorNotation::HEX) {
            return;
        }

        $reflector = new \ReflectionClass($this);
        $methods = $reflector->getMethods(\ReflectionMethod::IS_PUBLIC);

        foreach ($methods as $method) {
            if (str_starts_with($method->getName(), 'get')) {
                $prop = lcfirst(str_replace('get', '', $method->getName()));

                if (property_exists($this, $prop)) {
                    $this->{$prop} = $this->{$method->getName()}();
                }
            }
        }
    }
}
