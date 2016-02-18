#include "stdafx.h"
#include <windows.h>
#pragma comment(lib, "winmm.lib")
#include <stdlib.h>
#include <string.h>
#include <tchar.h>
#include <mmsystem.h>


//Initializarea variabilelor globale

static TCHAR szWindowClass[] = _T("win32app");
static TCHAR szTitle[] = _T("Laborator 1");
HINSTANCE hInst;


LRESULT CALLBACK WndProc(HWND, UINT, WPARAM, LPARAM);

int WINAPI WinMain(HINSTANCE hInstance,			//descrierea exemplarului (un numar care identifica programul,se pot porni mai multe copii ale programului) 
	HINSTANCE hPrevInstance,		//NULL,istoric, sistemele pe 16 biti aveau aceasi mediu de adresa, aici fiecare il poate avea pe al sau
	LPSTR lpCmdLine,				//parametri pentru CMD
	int nCmdShow)				//starea ferestrei la momentul initializarii 
{
	WNDCLASSEX wcex;

	wcex.cbSize = sizeof(WNDCLASSEX);
	wcex.style = CS_HREDRAW | CS_VREDRAW;								//fereastra se va redesena la redimensionare atit pe Vert. cit si pe Horiz. (0x0001 | 0x0002)
	wcex.lpfnWndProc = WndProc;											//adresa procedurei de fereastra care va prelucra procedurile la toate ferestrele facute in baza acestei clase
	wcex.cbClsExtra = 0;												//rezervarea unui mediu intern pentru sistemul de operare, o rezervare de memorie
	wcex.cbWndExtra = 0;
	wcex.hInstance = hInstance;											//descrierea exemplarului programei
	wcex.hIcon = LoadIcon(NULL, IDI_APPLICATION);
	wcex.hIconSm = LoadIcon(NULL, IDI_APPLICATION);						//iconita pentru toate ferestrele in baza acestei clase
	wcex.hCursor = LoadCursor(NULL, IDC_ARROW);
	wcex.hbrBackground = (HBRUSH)GetStockObject(WHITE_BRUSH);
	wcex.lpszMenuName = NULL;
	wcex.lpszClassName = szWindowClass;											//numele clasei
	wcex.hIconSm = LoadIcon(wcex.hInstance, MAKEINTRESOURCE(IDI_APPLICATION));

	if (!RegisterClassEx(&wcex))
	{
		MessageBox(NULL,
			_T("Inregistrare nereusita!"),
			_T("Failed"),
			NULL);

		return 1;
	}

	hInst = hInstance;

	HWND hWnd = CreateWindow(
		szWindowClass,					//numele clasei de fereastra
		szTitle,						//Titlul ferestrei
		WS_OVERLAPPEDWINDOW,			//stilul ferestrei
		CW_USEDEFAULT, CW_USEDEFAULT,	//pozitia initiala x, y
		500, 200,						// marimea initiala x, y
		NULL,							//fereastra de baza	
		NULL,							//meniul ferestrei
		hInstance,						//exemplarul programei
		NULL
		);	//parametrii crearii

	if (!hWnd)
	{
		MessageBox(NULL,
			_T("Imposibil de creat fereastra!"),
			_T("Failed"),
			NULL);

		return 1;
	}

	ShowWindow(hWnd, nCmdShow);
	UpdateWindow(hWnd);

	MSG msg;

	while (GetMessage(&msg, NULL, 0, 0))
	{
		TranslateMessage(&msg);
		DispatchMessage(&msg);
	}

	return (int)msg.wParam;
}

LRESULT CALLBACK WndProc(HWND hWnd, UINT message, WPARAM wParam, LPARAM lParam)
{
	PAINTSTRUCT ps;
	HDC hdc;
	RECT rect;

	switch (message)
	{
	case WM_CREATE:
		hdc = GetDC(hWnd);
		PlaySound(TEXT("D:\\sound.wav"), NULL, SND_FILENAME | SND_ASYNC);
		ReleaseDC(hWnd, hdc);
		return 0;

	case WM_PAINT:

		hdc = BeginPaint(hWnd, &ps);
		GetClientRect(hWnd, &rect);
		DrawText(hdc, 24+TEXT("Lucrarea de laborator a studentului: Virlan Ion TI-142!"), 11, &rect, DT_SINGLELINE | DT_CENTER | DT_VCENTER);
		EndPaint(hWnd, &ps);
		break;

	case WM_DESTROY:

		PostQuitMessage(0);
		break;
	default:
		return DefWindowProc(hWnd, message, wParam, lParam);
		break;
	}

	return 0;
}