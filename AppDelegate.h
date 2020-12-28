//
//  AppDelegate.h
//  Youtube Text
//
//  Created by Fanis Siampos on 9/10/16.
//  Copyright (c) 2016 Youtube Text. All rights reserved.
//

#import <Cocoa/Cocoa.h>
#import <WebKit/WebKit.h>

@interface AppDelegate : NSObject <NSApplicationDelegate>

@property (assign) IBOutlet NSWindow *window;

@property (assign) IBOutlet WebView *webView;

@end
