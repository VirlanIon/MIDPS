object Form1: TForm1
  Left = 242
  Top = 142
  Width = 445
  Height = 416
  Caption = 'MIDPS 1 - C'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  OnCreate = FormCreate
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 288
    Top = 16
    Width = 90
    Height = 13
    Cursor = crHelp
    Hint = 'Denumirea casetei de afisare a datei si orei curente'
    Caption = 'Data si ora curente'
    ParentShowHint = False
    ShowHint = True
  end
  object Label2: TLabel
    Left = 136
    Top = 72
    Width = 278
    Height = 16
    Cursor = crHelp
    Hint = 'Denumirea aplicatiei'
    Caption = 'Resurse grafice ale mediului C++Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -13
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    ParentShowHint = False
    ShowHint = True
  end
  object PaintBox1: TPaintBox
    Left = 160
    Top = 104
    Width = 257
    Height = 265
    Cursor = crHelp
    Hint = 'Diagrama'
    ParentShowHint = False
    ShowHint = True
  end
  object Button1: TButton
    Left = 16
    Top = 112
    Width = 75
    Height = 25
    Hint = 'Activarea afisarii in diagrama si in bargraf'
    BiDiMode = bdRightToLeft
    Caption = '&Start'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentBiDiMode = False
    ParentFont = False
    ParentShowHint = False
    ShowHint = True
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 16
    Top = 160
    Width = 75
    Height = 25
    Hint = 'Oprirea afisarii in diagrama si in bargraf'
    Caption = '&Stop'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 16
    Top = 208
    Width = 75
    Height = 25
    Hint = 'Iesirea din program'
    Caption = '&Exit'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    ParentShowHint = False
    ShowHint = True
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 272
    Top = 32
    Width = 121
    Height = 21
    Cursor = crHelp
    Hint = 'Data si ora curenta'
    ParentShowHint = False
    ShowHint = True
    TabOrder = 3
  end
  object Panel1: TPanel
    Left = 104
    Top = 104
    Width = 49
    Height = 265
    Cursor = crHelp
    Hint = 'Bargraf'
    Color = clSilver
    ParentShowHint = False
    ShowHint = True
    TabOrder = 4
  end
  object Panel2: TPanel
    Left = 104
    Top = 104
    Width = 49
    Height = 113
    Cursor = crHelp
    Hint = 'Bargraf'
    Color = clRed
    ParentShowHint = False
    ShowHint = True
    TabOrder = 5
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 16
    Top = 24
  end
  object Timer2: TTimer
    Interval = 500
    OnTimer = Timer2Timer
    Left = 16
    Top = 64
  end
end
