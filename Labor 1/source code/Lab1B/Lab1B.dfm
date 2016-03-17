object Form1: TForm1
  Left = 420
  Top = 171
  Width = 579
  Height = 480
  Caption = 'MIDPS 1 - B'
  Color = clAppWorkSpace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 24
    Top = 40
    Width = 511
    Height = 31
    Caption = 'Realizarea unui cronometru in C++ Builder'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clRed
    Font.Height = -27
    Font.Name = 'Times New Roman'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label3: TLabel
    Left = 144
    Top = 208
    Width = 365
    Height = 29
    Caption = 'C++ BUILDER      CRONOMETRU'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -24
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Button1: TButton
    Left = 40
    Top = 264
    Width = 75
    Height = 25
    Caption = 'START'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 40
    Top = 304
    Width = 75
    Height = 25
    Caption = 'STOP'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 40
    Top = 352
    Width = 75
    Height = 25
    Caption = 'ZERO'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Button4: TButton
    Left = 432
    Top = 392
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 3
    OnClick = Button4Click
  end
  object Edit1: TEdit
    Left = 280
    Top = 104
    Width = 225
    Height = 32
    Color = clYellow
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clBlue
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 4
    Text = 'Ora curenta'
  end
  object Edit2: TEdit
    Left = 144
    Top = 296
    Width = 329
    Height = 32
    Color = clScrollBar
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clFuchsia
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 5
    Text = '0 min  0 sec  0 zec'
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 32
    Top = 104
  end
  object Timer2: TTimer
    Enabled = False
    Interval = 100
    OnTimer = Timer2Timer
    Left = 32
    Top = 152
  end
end
