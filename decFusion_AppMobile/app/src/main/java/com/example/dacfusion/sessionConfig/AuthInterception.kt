package com.example.dacfusion.retrofit

import android.content.Context
import com.example.dacfusion.sessionConfig.SessionManager
import okhttp3.Interceptor
import okhttp3.Response

class AuthInterception (context: Context?): Interceptor {

    private val sessionManager =  SessionManager(context)

    override fun intercept(chain: Interceptor.Chain): Response {
        val resquestBuilder = chain.request().newBuilder()

        sessionManager.fetchAuthToken()?.let{
            resquestBuilder.addHeader("Authorization", "Bearer $it")
        }

        return chain.proceed(resquestBuilder.build())
    }

}
