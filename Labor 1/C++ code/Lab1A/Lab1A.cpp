//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Lab1A.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
int i;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button1Click(TObject *Sender)
{
   i+=1;
   Edit1->Text = IntToStr(i);
   Label3->Caption = "Variabila i se incrementeaza";
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button2Click(TObject *Sender)
{
   i-=1;
   Edit1->Text = IntToStr(i);
   Label3->Caption = "Variabila i se decrementeaza";
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button3Click(TObject *Sender)
{
  Close();        
}
//---------------------------------------------------------------------------

