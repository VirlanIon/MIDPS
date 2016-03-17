object Form1: TForm1
  Left = 395
  Top = 282
  Width = 614
  Height = 391
  Caption = 'MIDPS 1- A'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label2: TLabel
    Left = 104
    Top = 24
    Width = 406
    Height = 31
    Caption = 'Incrementare decrementare contor'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clRed
    Font.Height = -27
    Font.Name = 'Times New Roman'
    Font.Style = [fsBold, fsUnderline]
    ParentFont = False
  end
  object Label3: TLabel
    Left = 168
    Top = 72
    Width = 265
    Height = 22
    Caption = 'Sensului de variatie a variabilei i'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clWindowText
    Font.Height = -19
    Font.Name = 'Arial'
    Font.Style = []
    ParentFont = False
  end
  object Button1: TButton
    Left = 56
    Top = 160
    Width = 75
    Height = 25
    Caption = 'UP'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 56
    Top = 248
    Width = 75
    Height = 25
    Caption = 'DOWN'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 464
    Top = 288
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 136
    Top = 200
    Width = 65
    Height = 32
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
    TabOrder = 3
    Text = '0'
  end
end
