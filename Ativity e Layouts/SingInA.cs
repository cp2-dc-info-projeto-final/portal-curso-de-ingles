using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace AppAlfa
{
    [Activity(Label = "SingInA")]
    public class SingInA : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingIn);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
            Button OtalDoLog = FindViewById<Button>(Resource.Id.Log);
            OtalDoLog.Click += delegate {
                SetContentView(Resource.Layout.PagAlunoA);
                Intent Intent = new Intent(this, typeof(PagAlunoA));
                StartActivity(Intent);
            };
        }
    }
}