//---------------------------------------------------------------------------

#include <vcl.h>
#include <stdio.h>
#pragma hdrstop

#include "Lab1B.h"
#include "dos.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
struct date d;
struct time t;
unsigned int MS=0;
unsigned int S=0;
unsigned int M=0;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button1Click(TObject *Sender)
{
  Timer2->Enabled = true;
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
  MS+=1;
  if(MS==10)
  {S+=1; MS=0;}
  if(S==60)
  {M+=1; S=0;}
  if(M==60)
  {M=0;}

  Edit2->Text = IntToStr(M) + " min  " + IntToStr(S) + " sec  " + IntToStr(MS) + " zec ";
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button2Click(TObject *Sender)
{
  Timer2->Enabled = false;        
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button4Click(TObject *Sender)
{
  Close();        
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button3Click(TObject *Sender)
{
   M=0;
   S=0;
   MS=0;
   Edit2->Text = " 0 min  0 sec  0 zec ";
}
//---------------------------------------------------------------------------





void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
char buf[20];
getdate(&d);
gettime(&t);
sprintf(buf,"%02d-%02d-%4d %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
t.ti_hour,t.ti_min,t.ti_sec);
Edit1->Text = "0"+IntToStr(d.da_day)+"-0"+IntToStr(d.da_mon)+"-"+
IntToStr(d.da_year)+"  "+IntToStr(t.ti_hour)+":"+IntToStr(t.ti_min)+":"+
IntToStr(t.ti_sec);
}
//---------------------------------------------------------------------------



