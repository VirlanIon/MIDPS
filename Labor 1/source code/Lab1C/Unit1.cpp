//---------------------------------------------------------------------------

#include <vcl.h>
#include <stdio.h>
#include <time.h>
#include <dos.h>
#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"

using namespace std;

TForm1 *Form1;
struct date d;
struct time t;
int x,i,y;

randomize();

//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{

        Timer1->Enabled = true;
        Timer2->Enabled = false;
        Button1->Enabled = true;
        Button2->Enabled = false;
        
        char buf[30];
        getdate(&d);
        gettime(&t);

        sprintf(buf,"   %02d-%02d-%4d  %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
        t.ti_hour, t.ti_min, t.ti_sec);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
        char buf[30];
        getdate(&d);
        gettime(&t);
        sprintf(buf,"   %02d-%02d-%4d  %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
        t.ti_hour, t.ti_min, t.ti_sec);
        Edit1->Text=(AnsiString)buf;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button1Click(TObject *Sender)
{
        Timer2->Enabled = true;
        Button1->Enabled = false;
        Button2->Enabled = true;
        Button1->ShowHint = false;
        Button2->ShowHint = true;

	PaintBox1->Canvas->FloodFill(50,50,clBtnFace,fsBorder);
        PaintBox1->Canvas->Pen->Color=clBlack;
        for(i=0; i<300; i=i+10)
        {
                PaintBox1->Canvas->MoveTo(i,0);
                PaintBox1->Canvas->LineTo(i,300);
        }
        PaintBox1->Canvas->MoveTo(0,0);
        for(i=0;i<300; i=i+10)
        {
                PaintBox1->Canvas->MoveTo(0,i);
                PaintBox1->Canvas->LineTo(300,i);
        }

        PaintBox1->Canvas->MoveTo(0,100);
        PaintBox1->Canvas->Pen->Color=clRed;
	i = 0;
	x = 0;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
        x = rand()%100;
        i = i+7;
        Panel2->Height = 100 + x;

        PaintBox1->Canvas->LineTo(i,x);

        Panel2->Height=x;

        if(i==500)
        {
	        Button1->Enabled=true;
	        Button2->Enabled=false;
	        Timer2->Enabled=true;
	        Timer2->Tag = 0;

	        i = 0;
	        x = 0;
        }


}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button2Click(TObject *Sender)
{
        Timer2->Enabled = false;
        Button1->Enabled = true;
        Button2->Enabled = false;
        Button1->ShowHint = true;
        Button2->ShowHint = false;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button3Click(TObject *Sender)
{
  Close();
}
//---------------------------------------------------------------------------


void __fastcall TForm1::FormCreate(TObject *Sender)
{
        Edit1->Clear();
        Timer1->Enabled=true;
        Timer2->Enabled=false;
        Timer1->Interval=1000;
        Timer2->Interval=500;
        Button2->Enabled=false;
}
//---------------------------------------------------------------------------

