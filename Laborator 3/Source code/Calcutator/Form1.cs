using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calcutator
{
     public partial class Form1 : Form
     {
          Double resultValue = 0;
          String operationPerfomed = "";
          bool isOperationPerfomed = false;
          public Form1()
          {
               InitializeComponent();
          }

          private void Form1_Load(object sender, EventArgs e)
          {
               
          }
          private void button_click(object sender, EventArgs e)
          {
               if ((textBox_Result.Text == "0") || (isOperationPerfomed))
                    textBox_Result.Clear();

               isOperationPerfomed = false;
               Button button = (Button)sender;
               if (button.Text == ",")
               {
                    if (!textBox_Result.Text.Contains(","))
                         textBox_Result.Text = textBox_Result.Text + button.Text;

               }else
               textBox_Result.Text = textBox_Result.Text + button.Text;
          }

          private void operator_click(object sender, EventArgs e)
          {
               Button button = (Button)sender;
                    operationPerfomed = button.Text;
                    resultValue = Double.Parse(textBox_Result.Text);
                    labelCurrentOperation.Text = resultValue + " " + operationPerfomed;
                    isOperationPerfomed = true;                                       
          }

          private void button5_Click(object sender, EventArgs e)
          {
               textBox_Result.Text = "0";
          }

          private void button10_Click(object sender, EventArgs e)
          {
               textBox_Result.Text = "0";
               resultValue = 0;
          }

          private void button20_Click(object sender, EventArgs e)
          {
               switch (operationPerfomed)
               {
                    case "+":
                         textBox_Result.Text = (resultValue + Double.Parse(textBox_Result.Text)).ToString();
                         break;
                    case "-":
                         textBox_Result.Text = (resultValue - Double.Parse(textBox_Result.Text)).ToString();
                         break;
                    case "*":
                         textBox_Result.Text = (resultValue * Double.Parse(textBox_Result.Text)).ToString();
                         break;
                    case "/":
                         textBox_Result.Text = (resultValue / Double.Parse(textBox_Result.Text)).ToString();
                         break;
                    case "sqrt":
                         textBox_Result.Text = (Math.Sqrt(Double.Parse(textBox_Result.Text))).ToString();
                         break;
                    case "^":
                         textBox_Result.Text = Math.Pow(resultValue, Double.Parse(textBox_Result.Text)).ToString();     
                         break;
                    default:
                         break;
               }
               resultValue = Double.Parse(textBox_Result.Text);
               labelCurrentOperation.Text = "";
          }

          private void button21_Click(object sender, EventArgs e)
          {
               if (textBox_Result.Text.Contains("-"))
                    textBox_Result.Text = textBox_Result.Text.Remove(0, 1);
               else
                    textBox_Result.Text = "-" + textBox_Result.Text;
          }

          private void textBox_Result_TextChanged(object sender, EventArgs e)
          {

          }
     }
}
