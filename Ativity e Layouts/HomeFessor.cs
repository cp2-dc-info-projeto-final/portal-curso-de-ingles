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
    [Activity(Label = "HomeFessor")]
    public class HomeFessor : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.PagDoProfessor);
            Button GerarId = FindViewById<Button>(Resource.Id.GerarId);
            GerarId.Click += delegate {
                SetContentView(Resource.Layout.GeradorDeId);
                Intent Intent = new Intent(this, typeof(GeradorDeId));
                StartActivity(Intent);
            };
        }
    }
}